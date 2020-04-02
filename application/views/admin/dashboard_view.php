<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <img src="<?=base_url() ?>public/img/fire_hydrant.png" alt="Hydrant" style="width:100%;" />
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers text-center">
                                    <p><?php if(empty($hydrant_count)){ echo "0"; }else{ echo $hydrant_count; } ?></p>
                                    <p>မီးသတ္​ေရငုပ္</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="pe-7s-right-arrow"></i>
                                <a href="<?=site_url('waterpump')?>">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <img src="<?=base_url() ?>public/img/hospital.png" alt="Hospital" style="width:100%;" />
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers text-center">
                                    <p><?php if(empty($hospital_count)){ echo "0"; }else{ echo $hydrant_count; } ?></p>
                                    <p>​ေဆးရုံ</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="pe-7s-right-arrow"></i>
                                <a href="#">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <img src="<?=base_url() ?>public/img/charity.png" alt="Charity" style="width:100%;" />
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers text-center">
                                    <p><?php if(empty($charity_count)){ echo "0"; }else{ echo $hydrant_count; } ?></p>
                                    <p>ပရဟိတ</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="pe-7s-right-arrow"></i>
                                <a href="#">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <img src="<?=base_url() ?>public/img/police_station.png" alt="Police Station" style="width:100%;" />
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers text-center">
                                    <p><?php if(empty($police_station_count)){ echo "0"; }else{ echo $hydrant_count; } ?></p>
                                    <p>ရဲစခန္း</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="pe-7s-right-arrow"></i>
                                <a href="#">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <p style="font-size:2em;margin:100px;">Welcome to iRoute: admin panel!</p>
        </div>
    </div>
</div>


        