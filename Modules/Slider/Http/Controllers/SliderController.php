<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Slider\Entities\Slider;
use App\Models\Track;
use App\Helpers\UploadHelper;
use Auth,DataTables,DB;
use Carbon\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    
     public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    
    public function index($isTrashed=false)
    {
        if (is_null($this->user) || !$this->user->can('slider.view')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }

        if (request()->ajax()) {
            if ($isTrashed) {
                $sliders = Slider::orderBy('id', 'desc')
                    ->where('status', 0)
                    ->get();
            } else {
                $sliders = Slider::orderBy('id', 'desc')
                    ->where('deleted_at', null)
                    ->where('status', 1)
                    ->get();
            }

            $datatable = DataTables::of($sliders, $isTrashed)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($row) use ($isTrashed) {
                        $csrf = "" . csrf_field() . "";
                        $method_delete = "" . method_field("delete") . "";
                        $method_put = "" . method_field("put") . "";
                        $html = '<a class="btn waves-effect waves-light btn-info btn-sm btn-circle" title="View Service Details" href="' . route('admin.slider.show', $row->id) . '"><i class="fa fa-eye"></i></a>';

                        if ($row->deleted_at === null) {
                            $deleteRoute =  route('admin.slider.destroy', [$row->id]);
                            if ($this->user->can('slider.edit')) {
                                $html .= '<a class="btn waves-effect waves-light btn-success btn-sm btn-circle ml-1 " title="Edit Slider Details" href="' . route('admin.slider.edit', $row->id) . '"><i class="fa fa-edit"></i></a>';
                            }
                            if ($this->user->can('slider.delete')) {
                                $html .= '<a class="btn waves-effect waves-light btn-danger btn-sm btn-circle ml-1 text-white" title="Delete Admin" id="deleteItem' . $row->id . '"><i class="fa fa-trash"></i></a>';
                            }
                        } else {
                            $deleteRoute =  route('admin.slider.trashed.destroy', [$row->id]);
                            $revertRoute = route('admin.slider.trashed.revert', [$row->id]);

                            if ($this->user->can('slider.delete')) {
                                $html .= '<a class="btn waves-effect waves-light btn-warning btn-sm btn-circle ml-1" title="Revert Back" id="revertItem' . $row->id . '"><i class="fa fa-check"></i></a>';
                                $html .= '
                                <form id="revertForm' . $row->id . '" action="' . $revertRoute . '" method="post" style="display:none">' . $csrf . $method_put . '
                                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success"><i
                                            class="fa fa-check"></i> Confirm Revert</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary" data-dismiss="modal"><i
                                            class="fa fa-times"></i> Cancel</button>
                                </form>';
                                $html .= '<a class="btn waves-effect waves-light btn-danger btn-sm btn-circle ml-1 text-white" title="Delete Slider Permanently" id="deleteItemPermanent' . $row->id . '"><i class="fa fa-trash"></i></a>';
                            }
                        }



                        $html .= '<script>
                            $("#deleteItem' . $row->id . '").click(function(){
                                swal.fire({ title: "Are you sure?",text: "Service will be deleted as trashed !",type: "warning",showCancelButton: true,confirmButtonColor: "#DD6B55",confirmButtonText: "Yes, delete it!"
                                }).then((result) => { if (result.value) {$("#deleteForm' . $row->id . '").submit();}})
                            });
                        </script>';

                        if ($this->user->can('slider.delete')) {
                            $html .= '<script>
                            $("#deleteItemPermanent' . $row->id . '").click(function(){
                                swal.fire({ title: "Are you sure?",text: "Slider will be deleted permanently, both from trash !",type: "warning",showCancelButton: true,confirmButtonColor: "#DD6B55",confirmButtonText: "Yes, delete it!"
                                }).then((result) => { if (result.value) {$("#deletePermanentForm' . $row->id . '").submit();}})
                            });
                        </script>';

                            $html .= '<script>
                            $("#revertItem' . $row->id . '").click(function(){
                                swal.fire({ title: "Are you sure?",text: "Slider will be revert back from trash !",type: "warning",showCancelButton: true,confirmButtonColor: "#DD6B55",confirmButtonText: "Yes, Revert Back!"
                                }).then((result) => { if (result.value) {$("#revertForm' . $row->id . '").submit();}})
                            });
                        </script>';

                            $html .= '
                            <form id="deleteForm' . $row->id . '" action="' . $deleteRoute . '" method="post" style="display:none">' . $csrf . $method_delete . '
                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success"><i
                                        class="fa fa-check"></i> Confirm Delete</button>
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Cancel</button>
                            </form>';

                            $html .= '
                            <form id="deletePermanentForm' . $row->id . '" action="' . $deleteRoute . '" method="post" style="display:none">' . $csrf . $method_delete . '
                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success"><i
                                        class="fa fa-check"></i> Confirm Permanent Delete</button>
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Cancel</button>
                            </form>';
                        }
                        return $html;
                    }
                )

                ->editColumn('image', function ($row) {
                    if ($row->image != null) {
                        return "<a href='" . asset('public/images/slider/' . $row->image) . "' target='_blank'><img src='" . asset('public/images/slider/' . $row->image) . "' class='img img-display-list' /></a>";
                    }
                    return '-';
                })
                ->editColumn('status', function ($row) {
                    if ($row->status) {
                        return '<span class="badge badge-success font-weight-100">Active</span>';
                    } else if ($row->deleted_at != null) {
                        return '<span class="badge badge-danger">Trashed</span>';
                    } else {
                        return '<span class="badge badge-warning">Inactive</span>';
                    }
                });
            $rawColumns = ['action', 'name', 'status', 'description', 'image'];
            return $datatable->rawColumns($rawColumns)
                ->make(true);
        }

        $count_slider = count(Slider::select('id')->get());
        $count_active_slider = count(Slider::select('id')->where('status', 1)->get());
        $count_trashed_slider = count(Slider::select('id')->where('deleted_at', '!=', null)->get());
        
        
        return view('slider::slider.index',compact('count_slider','count_active_slider','count_trashed_slider'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('slider::slider.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('slider.create')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|dimensions:ratio=3/2'
        ]);

        try {
            DB::beginTransaction();
            $slider = new Slider();
            $slider->name = $request->name;
            
            if (!is_null($request->image)) {
                $slider->image = UploadHelper::upload('image', $request->image, $request->name . '-' . time() . '-slider', 'public/images/slider');
            }

            $slider->status = $request->status;
            $slider->description = $request->description;
           
            $slider->created_at = Carbon::now();
            $slider->created_by = Auth::id();
            $slider->updated_at = Carbon::now();
            $slider->save();

            Track::newTrack($slider->name, 'New Slider has been created');
            DB::commit();
            session()->flash('success', 'New Slider has been created successfully !!');
            return redirect()->route('admin.slider.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            DB::rollBack();
            return back();
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        
        if (is_null($slider)) {
            session()->flash('error', "The slider is not found !");
            return redirect()->route('admin.slider.index');
        }

        return view('slider::slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        if (is_null($slider)) {
            session()->flash('error', "The slider is not found !");
            return redirect()->route('admin.slider.index');
        }
        return view('slider::slider.create',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        if (is_null($this->user) || !$this->user->can('slider.edit')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }

        $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);

        $slider = Slider::find($id);
        if (is_null($slider)) {
            session()->flash('error', "The slider is not found !");
            return redirect()->route('admin.slider.index');
        }

        try {
            DB::beginTransaction();
            
            $slider->name = $request->name;
            
            if (!is_null($request->image)) {
                $slider->image = UploadHelper::upload('image', $request->image, $request->name . '-' . time() . '-slider', 'public/images/slider');
            }

            $slider->status = $request->status;
            $slider->description = $request->description;
           
            
            $slider->updated_by = Auth::id();
            $slider->updated_at = Carbon::now();
            $slider->save();

            Track::newTrack($slider->name, 'New Slider has been updated');
            DB::commit();
            session()->flash('success', 'New Slider has been updated successfully !!');
            return redirect()->route('admin.slider.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        if (is_null($this->user) || !$this->user->can('slider.delete')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }

        $slider = Slider::find($id);
        if (is_null($slider)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('admin.slider.trashed');
        }
        $slider->deleted_at = Carbon::now();
        $slider->deleted_by = Auth::id();
        $slider->status = 0;
        $slider->save();

        session()->flash('success', 'Slider has been deleted successfully as trashed !!');
        return redirect()->route('admin.slider.trashed');
    }

    public function revertFromTrash($id)
    {
        if (is_null($this->user) || !$this->user->can('slider.delete')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }

        $slider = Slider::find($id);
        if (is_null($slider)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('admin.slider.trashed');
        }
        $slider->deleted_at = null;
        $slider->deleted_by = null;
        $slider->save();

        session()->flash('success', 'Slider has been revert back successfully !!');
        return redirect()->route('admin.slider.trashed');
    }

    /**
     * destroyTrash
     *
     * @param integer $id
     * @return void Destroy the data permanently
     */
    public function destroyTrash($id)
    {
        if (is_null($this->user) || !$this->user->can('slider.delete')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }
        $slider = Slider::find($id);
        if (is_null($slider)) {
            session()->flash('error', "The page is not found !");
            return redirect()->route('admin.slider.trashed');
        }

        // Remove Images
        
        UploadHelper::deleteFile('public/assets/images/slider/' . $slider->image);

        // Delete Service permanently
        $slider->delete();

        session()->flash('success', 'Slider has been deleted permanently !!');
        return redirect()->route('admin.slider.trashed');
    }

    /**
     * trashed
     *
     * @return view the trashed data list -> which data status = 0 and deleted_at != null
     */
    public function trashed()
    {
        if (is_null($this->user) || !$this->user->can('slider.view')) {
            $message = 'You are not allowed to access this page !';
            return view('errors.403', compact('message'));
        }
        return $this->index(true);
    }
}
