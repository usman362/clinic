@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Patient List</h1>
            <small>Patient List</small>
        </div>
    </section>

    <div class="row">

        <div class="col-sm-12">
            <section class="content">
                <div class="panel panel-bd">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <h4>Patient List</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="patient_list_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline collapsed" id="patient_list" role="grid" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Picture: activate to sort column descending" style="width: 114px;">Picture</th>
                                        <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Patient Id: activate to sort column ascending" style="width: 145px;">Patient Id</th>
                                        <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Name(Family &amp;amp; Given): activate to sort column ascending" style="width: 293px;">Name(Family &amp; Given)</th>
                                        <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 208px;">Phone Number</th>
                                        <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Birth date: activate to sort column ascending" style="width: 149px;">Birth date</th>
                                        {{-- <th class="none sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 0px; display: none;">Address</th>
                                        <th class="none sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Blood Group: activate to sort column ascending" style="width: 0px; display: none;">Blood Group</th>
                                        <th class="none sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 0px; display: none;">Gender</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 121px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($patient as $item)
    
                                    <tr class="gradeX odd" role="row">
                                        <td class="sorting_1" tabindex="0">
                                            <div class="profile-userpic">
                                                <img width="50" src="../../../image/Patient/{{$item->image}}" class="img-responsive">
                                            </div>
                                        </td>
                                        <td>{{$item->patient_id}}</td>
                                        <td><?php echo \Crypt::decryptString($item->title); ?></td>
                                        <td><?php echo \Crypt::decryptString($item->phone); ?></td>
                                        <td><?php echo \Crypt::decryptString($item->birth); ?></td>
                                        {{-- <td style="display: none;">My Street, My Country</td>
                                        <td style="display: none;">B+</td>
                                        <td style="display: none;">Male</td> --}}
                                        <td class="">
                                            <a class="btn btn-xs btn-info" href="/Patient/{{$item->id}}/edit">
                                                <i class="fa fa-edit"></i> </a>
                                            {{-- <a class="btn btn-xs btn-success" href="/patient-information/{{$item->id}}"> <i class="fa fa-eye"></i> </a>
                                            <a class="btn btn-xs btn-danger" href="https://newclinic365.bdtask.com/admin/Patient_controller/delete_patient/P192077" onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you want to delelte?');">
                                                <i class="fa fa-trash"></i> </a> --}}
                                        </td>
                                    </tr>
                                   
@endforeach
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>
@endsection