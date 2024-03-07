<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/lead.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/deam.png);"></a>
	        <ul class="list-unstyled components mb-5">
            <li>
              <a href="home">Dashboard</a>
	          </li>
	          <li class="">
	            <a href="#customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customer</a>
	            <ul class="collapse list-unstyled" id="customer">
                <li>
                    <a href="lead">Lead</a>
                </li>
                <li>
                    <a href="customer">Customer</a>
                </li>
	            </ul>
	          </li>
            <li class="">
	            <a href="#ticket" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ticket</a>
	            <ul class="collapse list-unstyled" id="ticket">
                <li>
                    <a href="#">ATM</a>
                </li>
                <li>
                    <a href="#">Ticket</a>
                </li>
	            </ul>
	          </li>
            <li class="">
	            <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Report</a>
	            <ul class="collapse list-unstyled" id="report">
                <li>
                    <a href="#">Sale</a>
                </li>
                <li>
                    <a href="#">Technical</a>
                </li>
	            </ul>
	          </li>

	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Staff</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="staff">Staff</a>
                </li>
                <li>
                    <a href="#">Manage</a>
                </li>
                <li>
                    <a href="#">Permisstion</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Calender</a>
	          </li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
              </ul>
              <input class="form-control me-sm-2" style="width: 200px;" type="search" placeholder="Search"  />
            </div>
          </div>
        </nav>
        <body>
        <div class="a">
            <div class="name-new-new-service" style="float:left;"><h2>STAFF</h2></div>
            <div style="float:right;" ><button class="create-staff btn-create-staff" ><i class="fa fa-plus-square" aria-hidden="true"></i>
CREATE</button></div>
            <div style="clear:both;"></div>
        </div>

            <table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Date to start work</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Pov sidanak</td>
                <td>Prince@gmail.com</td>
                <td>HR</td>
                <td>096785434</td>
                <td>Admin</td>
                <td>2024-02-12</td>
                <td>
                    <span >
                        <button style="background-color: #423EFF;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span >
                        <button style="background-color: #67A7CC;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span>
                        <button style="background-color: #F60E0E;" class="btn-crud-list-staff ">
                        <i  style="color: white;" class="fa fa-trash-o btn-delete-staff" aria-hidden="true"></i>
                        </button>
                    </span>
                </td>
              </tr>
            </table>
            
<!------------- Form Create staff ------------>

<div class="content-create-new-staff-create">
    <div>
        <div class="a">
            <div class="name-new-new-staff-create" style="float:left;">NEW STAFF</div>
            <div class="icon-cancel-new-staff-create" style="float:right;"><span><i class="fa fa-times-circle-o close-create-staff" aria-hidden="true"></i>
</span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-staff-create " style="float:left; ">
            <label class="label" for="Username">Username</label>
            <input type="text" class="form-control-new-staff-create" placeholder="Username" required>
        </div>
        <div class="form-group-new-staff-create" style="float:right; ">
            <label class="label" for="email-company">Email</label>
            <input type="email" class="form-control-new-staff-create" placeholder="Email" required>
        </div>
        <div class="form-group-new-staff-create" style="float:left;">
            <label class="label" for="phone-number-company">Password</label>
            <input type="password" class="form-control-new-staff-create" placeholder="Password" required>
        </div>
        <div class="form-group-new-staff-create" style="float:right;">
            <label class="label" for="Confirm Password">Confirm Password</label>
            <input type="password" class="form-control-new-staff-create" placeholder="Confirm Password" required>
        </div>
        <div class="form-group-new-staff-create" style="float:left; width: 48%;">
            <label  class="label" for="Department">Department</label>
            <select name="input-by" class="form-control-new-staff-create">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-staff-create" style="float:right; width: 48%;">
                <label  class="label" for="Role">Role</label>
                <select name="Role" class="form-control-new-staff-create">
                  <option value=""></option>
                  <option value="Sale A">Sale A</option>
                  <option value="Sale B">Sale B</option>
                  <option value="Sale C">Sale C</option>
                </select></div>    
        <div class="form-group-new-staff-create" style="float:left;">
            <label class="label" for="Address">Address</label>
            <input type="text" class="form-control-new-staff-create" placeholder="Address" required>
        </div>
        <div class="form-group-new-staff-create" style="float:right;">
            <label class="label" for="Phone Number">Phone Number</label>
            <input type="number" class="form-control-new-staff-create" placeholder="Phone Number" required>
        </div>
        <div class="form-group-new-staff-create" style="width: 94%;">
            <label class="label" for="description-company">Description</label>
            <input style="height: 80px;" type="text" class="form-control-des-new-staff-create " placeholder="Description" required>
        </div>
        <div class="form-group-new-staff-create" style="float:left; width: 40%;">
            <label  class="label" for="input-by">Input by</label>
            <select name="input-by" class="form-control-new-staff-create">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-staff-create" style="padding: 30px 12px 0px 0px;float:right;">
            <button class="btn-create-new-staff-create">SUBMIT</button>
        </div>

    </form>

</div>
        <!------------ end of create staff ----------------->

        <!------------- Form delete staff ------------>

        <div class="delete-dev-staff">
        <div class="all-div-staff" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-staff" style="font-size: 20px;">Do you want to delete this staff?</h2>
        <div class="btn-dev-staff">
        <button class="btn-cancel-delete-staff">Cancel</button>
        <button class="btn-confirm-delete-staff">Delete</button>
        </div>
        </div>
    </div>  

        <!------------ end of delete staff ----------------->

</body>
</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <style>

.btn-create-staff{
        background-color: #6fb6df;
        color: white;
        width: 150px;
        height: 52.18;
        border: none;
        border-radius: 4px;
        font-size: large;
        
        
    }
    /* <!------------- Form Create staff ------------> */

        .content-create-new-staff-create{
        width: 500px;
        height: 500px;
        background-color: rgb(255, 255, 255);
        border:none;
        border-radius: 4px;
        display: none;
        position: relative;
        left: 300px;
        bottom: 170px;
        box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.5), inset 0px -3px 6px -2px rgba(0, 0, 0, 0.3);

    }
    .name-new-new-staff-create {
    padding: 10px 0px 0px 14px;
    font-size: 20px;
    }
    .icon-cancel-new-staff-create {
    padding: 10px 14px 0px 10px;
    font-size: 20px;
    cursor: pointer;
    }
    input.form-control-des-new-staff-create{
      font-size: small;
    }

    /* label {
    display: inline-block;
    margin-bottom: 0.5rem; } */
    .form-control-new-staff-create ,.file{
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 9px 9px 9px 9px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #6fb6df;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    .form-group-new-staff-create{
        padding: 0px 10px 0px 10px;
    }
    .btn-create-new-staff-create{
        background-color: #6fb6df;
        color: white;
        width: 150px;
        height: 40px;
        border: none;
        border-radius: 4px;
        font-size: small;
        cursor: pointer;
    }
    .form-control-des-new-staff-create{
    display: block;
    width: 107%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0px 9px 40px 9px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #6fb6df;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    /* <!------------ end of create staff -----------------> */

    /* css delete */
    .delete-dev-staff{
        width: 300px;
        height: 150px;
        background-color: white;
        border: none;
        border-radius: 4px;
        position: relative;
        left: 350px;
        bottom: 80px;
        display: none;
        box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.5), inset 0px -3px 6px -2px rgba(0, 0, 0, 0.3);
    }
    .btn-dev-staff{
        justify-content: center;
        text-align: center;
        align-items: center;
    }
    .text-delete-staff{
        justify-content: center;
        text-align: center;
        align-items: center;
    }
    .btn-confirm-delete-staff , .btn-cancel-delete-staff {
        width: 90px;
        height: 30px;
    }
    .btn-cancel-delete-staff {
        background-color: #3F5FFF;
        color: white;
        border: none;
        border-radius: 4px;
    }
    .btn-confirm-delete-staff {
        background-color: #F81616;
        color: white;
        border: none;
        border-radius: 4px;
    }

    /* end css delete */

  </style>
  <script>
    let pop_up1 = document.querySelector(".content-create-new-staff-create")
    let create_staff_button = document.querySelector(".create-staff")
    let close_create_staff = document.querySelector(".close-create-staff")

    create_staff_button.onclick = () => {
      pop_up1.style.display = "block"
      close_create_staff.onclick = () => pop_up1.style.display = "none"
    }

    let pop_up2 = document.querySelector(".delete-dev-staff")
    let btn_delete_staff = document.querySelector(".btn-delete-staff")
    let btn_cancel_delete_staff = document.querySelector(".btn-cancel-delete-staff")

    btn_delete_staff.onclick = () => {
        pop_up2.style.display = "block"
        btn_cancel_delete_staff.onclick = () => pop_up2.style.display = "none"
    }
  </script>
</html>
