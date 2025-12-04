<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EnquiryController extends Controller
{
    public function index(){
        return view('Admin.Enquiries.index');
    }

    public function data(Request $request){
    $query = Enquiry::where('id','!=',0)
        ->orderBy('created_at', 'desc')   // latest first
        ->orderBy('id', 'desc');          // force ordering

    return DataTables::eloquent($query)
       ->editColumn('datetime', function ($enquiry) {
            return $enquiry->created_at
                ->timezone('Asia/Kolkata')
                ->format('d-m-Y || h:i A');
        })
        ->editColumn('full_name', fn($enquiry) => $enquiry->full_name)
        ->editColumn('subject', fn($enquiry) => $enquiry->subject)
        ->editColumn('email', fn($enquiry) =>
            '<a href="mailto:' . e($enquiry->email) . '">' . e($enquiry->email) . '</a>'
        )
        ->editColumn('mobile', fn($enquiry) =>
            '<a href="tel:' . e($enquiry->mobile) . '">' . e($enquiry->mobile) . '</a>'
        )
        ->editColumn('message', fn($enquiry) =>
            mb_strimwidth($enquiry->message, 0, 97, '...')
        )
        ->addColumn('action', function ($enquiry) {
            return '<a href="'.route('admin.enquiries.show',['enquiry' => $enquiry->route_key]).'" class="badge bg-info fs-1 modal-one-btn" data-entity="enquiries" data-title="Enquiry" data-route-key="'.$enquiry->route_key.'"><i class="fa fa-eye"></i></a>';
        })
        ->addIndexColumn()
        ->rawColumns(['datetime','full_name','subject','email','mobile','status','action'])
        ->setRowId('id')
        ->make(true);
}


    public function list(){
		$enquiries = Enquiry::all();
        return response()->json([   
            'status' => 'success',
            'list' => $enquiries
        ],200);   
	}

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }
    public function show(Enquiry $enquiry){
        return view('Admin.Enquiries.show',compact('enquiry'));
    }

    public function edit(Enquiry $enquiry){
        //
    }

    public function update(Request $request,$enquiry){
        //
    }

    public function destroy(Enquiry $enquiry){
        //
    }
}
