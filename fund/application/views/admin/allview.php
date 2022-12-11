<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Product edit</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>E-commerce</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Product edit</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Blog</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-2"> Donate </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-3"> events </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-4"> Images </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-5"> Gallery </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-6"> Causes </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-7"> member </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-8"> volunteer </a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-9*"> admin </a></li>
                </ul>
                <div class="tab-content">

                    <!---------------------------------------------------------------- blog add -------------------------------------->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/blog-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"
                                                placeholder="Name"></div>
                                    </div>


                                    <div class="form-group row"><label class="col-sm-2 col-form-label">date:</label>
                                        <div class="col-sm-10"><input type="date" name="date" class="form-control"
                                                placeholder="amount"></div>
                                    </div>


                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">description:</label>
                                        <div class="col-sm-10"><input type="text" name="description"
                                                class="form-control" placeholder="  description"></div>
                                    </div>


                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>

                                </form>

                            </fieldset>


                        </div>
                    </div>

                    <!---------------------------------------------------------------- blog add  end -------------------------------------->

                    <!-----------------#############################  donate add  ########################################################################--------------------->
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/donate-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">ID:</label>
                                        <div class="col-sm-10"><input type="text" name="people_id" class="form-control"
                                                placeholder="0123456789"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount:</label>
                                        <div class="col-sm-10"><input type="text" name="amount" class="form-control"
                                                placeholder="amount"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" name="name" class="form-control"
                                                placeholder="Name"></div>
                                    </div>
                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">Designetion:</label>
                                        <div class="col-sm-10"><input type="text" name="designation"
                                                class="form-control" placeholder="Designetion"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">email:</label>
                                        <div class="col-sm-10"><input type="text" name="email" class="form-control"
                                                placeholder="email"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">contact:</label>
                                        <div class="col-sm-10"><input type="text" name="contact" class="form-control"
                                                placeholder="contact"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">address:</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control"
                                                placeholder="address"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Sort
                                            description:</label>
                                        <div class="col-sm-10"><input type="text" name="short_description"
                                                class="form-control" placeholder=" Sort description"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>
                                    <!-- <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" >
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                    </select>
                                                </div>
											</div> -->
                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!-----------------#############################  donate add end   ########################################################################--------------------->
                    <!---------------------------------------------------------------- events add -------------------------------------->
                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/events-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"
                                                placeholder="Name"></div>
                                    </div>


                                    <div class="form-group row"><label class="col-sm-2 col-form-label">date:</label>
                                        <div class="col-sm-10"><input type="date" name="date" class="form-control"
                                                placeholder="amount"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">time:</label>
                                        <div class="col-sm-10"><input type="time" name="time" class="form-control"
                                                placeholder="amount"></div>
                                    </div>

                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">description:</label>
                                        <div class="col-sm-10"><input type="text" name="description"
                                                class="form-control" placeholder="  description"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">location:</label>
                                        <div class="col-sm-10"><input type="text" name="location" class="form-control"
                                                placeholder="amount"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>

                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!---------------------------------------------------------------- events add  end -------------------------------------->
                    <div id="tab-4" class="tab-pane">
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Sort order
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                                                $res = $this->om->view("*", "gallery");
                                                                                foreach($res as $p){
                                                                                  
                                                                               ?>
                                        <tr>
                                            <td>
                                                <img hight="100px" width="100px"
                                                    src="<?php echo base_url();?>gallery/images/<?php echo $p->id;?>.<?php echo $p->images;?>">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image1.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="1">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <?php
											}
											?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/1s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image2.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="2">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/3s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image3.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="3">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/4s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image4.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="4">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/5s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image5.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="5">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/6s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image6.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="6">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="<?php echo base_url();?>dasset/img/gallery/7s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                    value="http://mydomain.com/images/image7.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="7">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!---------------------------------------------------------------- gallery add -------------------------------------->
                    <div id="tab-5" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/gallery-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"
                                                placeholder="Name"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images
                                            Date:</label>
                                        <div class="col-sm-10"><input type="text" name="img_date" class="form-control"
                                                placeholder="amount"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">People
                                            Images:</label>
                                        <div class="col-sm-10"><input type="text" name="people_img" class="form-control"
                                                placeholder="Designetion"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Sort
                                            description:</label>
                                        <div class="col-sm-10"><input type="text" name="short_description"
                                                class="form-control" placeholder=" Sort description"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Event Id:</label>
                                        <div class="col-sm-10">
                                            <select name="event_id" class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Home Page
                                            Images:</label>
                                        <div class="col-sm-10"><input type="file" name="homepageimages"
                                                class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>

                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!---------------------------------------------------------------- gallery add  end -------------------------------------->


                    <!---------------------------------------------------------------- causes add -------------------------------------->
                    <div id="tab-6" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/causes-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Title:</label>
                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"
                                                placeholder="Name"></div>
                                    </div>


                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount:</label>
                                        <div class="col-sm-10"><input type="text" name="amount" class="form-control"
                                                placeholder="amount"></div>
                                    </div>

                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">description:</label>
                                        <div class="col-sm-10"><input type="text" name="description"
                                                class="form-control" placeholder="  description"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>

                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!---------------------------------------------------------------- causes add  end -------------------------------------->
                    <!-----------------#############################  member add  ########################################################################--------------------->
                    <div id="tab-7" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/member-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" name="name" class="form-control"
                                                placeholder="0123456789"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">email:</label>
                                        <div class="col-sm-10"><input type="text" name="email" class="form-control"
                                                placeholder="amount"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">password:</label>
                                        <div class="col-sm-10"><input type="text" name="password" class="form-control"
                                                placeholder="Name"></div>
                                    </div>
                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">Designation:</label>
                                        <div class="col-sm-10"><input type="text" name="designation"
                                                class="form-control" placeholder="Designetion"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">phone:</label>
                                        <div class="col-sm-10"><input type="text" name="phone" class="form-control"
                                                placeholder="email"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">address:</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control"
                                                placeholder="address"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>
                                    <!-- <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" >
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                    </select>
                                                </div>
											</div> -->
                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!-----------------#############################  member add end   ########################################################################--------------------->

                    <!-----------------#############################  volunteer add  ########################################################################--------------------->
                    <div id="tab-8" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/volunteer-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" name="name" class="form-control"
                                                placeholder="name"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">email:</label>
                                        <div class="col-sm-10"><input type="text" name="email" class="form-control"
                                                placeholder="email"></div>
                                    </div>


                                    <div class="form-group row"><label class="col-sm-2 col-form-label">phone:</label>
                                        <div class="col-sm-10"><input type="text" name="phone" class="form-control"
                                                placeholder="phone"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">address:</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control"
                                                placeholder="address"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">messege:</label>
                                        <div class="col-sm-10"><input type="text" name="messege" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>
                                    <!-- <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" >
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                    </select>
                                                </div>
											</div> -->
                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!-----------------#############################  volunteer add end   ########################################################################--------------------->
                    <!-----------------#############################  admin add  ########################################################################--------------------->
                    <div id="tab-9" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <form action="<?php echo base_url('admin/admin-add-confirm');?>"
                                    enctype="multipart/form-data" method="post">

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" name="name" class="form-control"
                                                placeholder="0123456789"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">email:</label>
                                        <div class="col-sm-10"><input type="text" name="email" class="form-control"
                                                placeholder="amount"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">password:</label>
                                        <div class="col-sm-10"><input type="text" name="password" class="form-control"
                                                placeholder="Name"></div>
                                    </div>
                                    <div class="form-group row"><label
                                            class="col-sm-2 col-form-label">Designation:</label>
                                        <div class="col-sm-10"><input type="text" name="designation"
                                                class="form-control" placeholder="Designetion"></div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">phone:</label>
                                        <div class="col-sm-10"><input type="text" name="phone" class="form-control"
                                                placeholder="email"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">address:</label>
                                        <div class="col-sm-10"><input type="text" name="address" class="form-control"
                                                placeholder="address"></div>
                                    </div>

                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Images:</label>
                                        <div class="col-sm-10"><input type="file" name="images" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    </div>
                                    <!-- <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" >
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                    </select>
                                                </div>
											</div> -->
                                </form>
                            </fieldset>


                        </div>
                    </div>

                    <!-----------------#############################  admin add end   ########################################################################--------------------->

                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer">
    <div class="float-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2018
    </div>
</div>
