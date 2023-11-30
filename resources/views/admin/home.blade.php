@extends('layouts.adminpanel')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="wrapper wrapper-content  m-1 p-1">
                <div class="row m-0 p-0">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Mission</h5>
                            </div>
                            <div class="ibox-content">
                                <p>To create an environment that shall foster the growth of intellectually capable, innovative and entrepreneurial professionals, who shall contribute to the growth of Science and Technology in partnership with industry and develop and harness it for the welfare of the nation and mankind.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Training</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="trainingLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=1951597000"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Fellowships</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="fellowshipLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=1732378900"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Startups</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="startupsLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=0"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Consultancy</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="consultancyLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=750226036"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>CSR</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="csrLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=706201597"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>ISP</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins blink" id="ispLeads">-.-</h1>
                                <div class="stat-percent font-bold text-primary"><a target="_blank" href="https://docs.google.com/spreadsheets/d/1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls/edit#gid=976377200"><span class="label label-primary">Sheets <i class="fa fa-external-link-square"></i></span></a></div>
                                <small>Leads</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .blink {
        animation: blink 1s infinite;
    }
</style>
<script>
    $(document).ready(function() {
        $('.no-margins').addClass('blink');
        $.get('{{ route("get.stats") }}', function(data) {
            $('.no-margins').removeClass('blink');
            $('#trainingLeads').html(data.trainingLeads);
            $('#fellowshipLeads').html(data.fellowshipLeads);
            $('#startupsLeads').html(data.startupLeads);
            $('#consultancyLeads').html(data.consultancyLeads);
            $('#csrLeads').html(data.csrLeads);
            $('#ispLeads').html(data.ispLeads);
            console.log(data);
        });
    });
</script>
@endsection