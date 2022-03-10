@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Appointment List</h1>
            <small>Appointment List</small>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div><a href="/Appointment/create" class="btn btn-success pull-right">Create Appointment</a></div>
                        <div class="panel-title">
                            <h4>Appointment List </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="appointment_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                   
                            <table width="100%" class="table table-striped table-bordered table-hover dt-responsive dataTable no-footer dtr-column" id="appointment" role="grid" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Patient Name: activate to sort column ascending" style="width: 151px;">Patient Name</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Patient Id: activate to sort column ascending" style="width: 112px;">Patient Id</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 164px;">Phone Number</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Appointment Id: activate to sort column ascending" style="width: 172px;">Appointment Id</th>
                                        <th class="all sorting_asc" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 89px;">Date</th>
                                        {{-- <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Appointment Time: activate to sort column ascending" style="width: 201px;">Appointment Time</th> --}}
                                        <th class="desktop sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 78px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr role="row" class="odd">
                                        @foreach (App\Appointment::where('doctor',Auth::user()->name)->get() as $item)
                                            
                                        <td><?php echo \Crypt::decryptString($item->patient)?></td>
                                        <td>{{$item->patient_id}}</td>
                                        <td><?php echo \Crypt::decryptString($item->phone)?></td>
                                        <td>{{$item->appoint_id}}</td>
                                        <td class="sorting_1"><?php echo \Crypt::decryptString($item->date)?></td>
                                        {{-- <td></td> --}}
                                        <td class="text-center" style="width: 100px;">
                                            {{-- <a class="btn btn-xs btn-success" data-original-title="View Appointment" target="_blank" href="/appointment-information/{{$item->id}}"><i class="fa fa-print"></i></a>
                                            <a class="btn btn-xs btn-info" data-original-title="View History" target="_blank" href="/appointment-history/{{$item->id}}"><i class="fa fa-history" aria-hidden="true"></i></a> --}}
                                            <a class="btn btn-xs btn-success" data-original-title="View Appointment" target="_blank" href="/Appointment/{{$item->id}}/edit"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                  
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection