<!DOCTYPE html>
<html lang="en">

@include('partials.header')
<body class="hold-transition sidebar-mini">
    <div class="se-pre-con"></div>

<div class="wrapper">
@include('partials.navbar')
<script type="ba7328c2c473414dd82bc1e0-text/javascript">
    $(document).ready(function () {

        var segment_1 = 'admin';
        var segment_2 = 'Dashboard';
        var segment_3 = '';

        if (segment_3 === 'prescription_list' || segment_3 === 'create_new_generic'|| segment_3 === 'create_new_prescription') {
            $('.pres').addClass('active');
        }
       
        else if (segment_3 === 'Payment' || segment_3 === 'Payment_manage') {
            $('.payment').addClass('active');
        }
        else if (segment_2 === 'Appointment_controller' || segment_3 === 'appointment_list') {
            $('.appointment').addClass('active');
        }

        else if (segment_1 === 'create_new_patient' || segment_1 === 'patient_list') {
            $('.patient').addClass('active');
        }
        else if (segment_3 === 'add_schedule' || segment_3 === 'schedule_list' || segment_3 ==='schedul_edit') {
            $('.schedule').addClass('active');
        }
        else if (segment_2 === 'Emergency_stop_controller') {
            $('.emergency_stop').addClass('active');
        }
        else if (segment_2 === 'Venue_controller') {
            $('.venue').addClass('active');
        }
        else if (segment_2 === 'Disease_test_controller' || segment_2 === 'Setup_controller') {
            $('.setup_data').addClass('active');
        }
        else if (segment_2 === 'Users_controller' || segment_2 === 'Users_controller') {
            $('.users').addClass('active');
        }
        else if (segment_2 === 'Web_setup_controller' || segment_1 === 'profile') {
            $('.web_setting').addClass('active');
        }
        else if (segment_2 === 'Blog_controller' || segment_2 === 'Blog_controller') {
            $('.blog').addClass('active');
        }
        else if (segment_2 === 'Sms_setup_controller' || segment_2 === 'Sms_report_controller') {
            $('.sms_setup').addClass('active');
        }

        else if (segment_3 === 'Email') {
            $('.email').addClass('active');
        }
        else if (segment_2 === 'Doctor_controller') {
            $('.Doctor').addClass('active');
        }
        else if (segment_3 === 'Print_pattern_controller') {
            $('.print_pattern').addClass('active');
        } 
        else if (segment_2 === 'Invoice' || segment_2 === 'Service') {
            $('.Invoice').addClass('active');
        } 

    });

</script>

@include('partials.sidebar')

@yield('content')

@include('partials.footer')

</div>
@include('partials.library')
</body>
</html>
