<div class="container">

<!-- Forms
================================================== -->
    <section id="forms">
    <div class="page-header">
        <h1>Forms</h1>
    </div>
        <div class="row">
            <div class="bannerImg">
                <img src="../img/boyStandingCroped.png" alt="" />
            </div>
        </div>
    <div class="row">
        <div class="span10 offset1">
            <div class="myForm">
                <form class="form-horizontal" method="post" action="#" id="myForm1">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Name</label>
                        <div class="controls">
                            <input type="text" id="name" placeholder="name" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Mobile</label>
                        <div class="controls">
                            <input type="text" id="mobile" placeholder="Mobile">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="timer">Hour</label>
                        <div class="controls clearfix">
                            <input type="text" id="timer" placeholder='Numbers or press plus/minus' class="pull-left" onKeyUp="check_value(this.value,this.id);" />
                            <div class="timerImg timerImgIncre" id="increBtn"></div>
                            <div class="timerImg timerImgDncre" id="dcreBtn"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox"> Remember me
                            </label>
                            <button type="button" class="btn btn-primary" onclick="takeText();">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<!-- Tables
================================================== -->
    <section id="tables">
    <div class="page-header">
        <h1>Tables</h1>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</section>

</div>