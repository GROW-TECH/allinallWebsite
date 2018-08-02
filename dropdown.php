<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Dropdown On Hover Plugin Demos</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="dropdown/css/bootstrap-dropdownhover.css">
<style>

.dropdown-inline {
	display: inline-block;
	position: relative;
}
</style>
</head>

<body>
<div class="bs-demo-dropdowns text-center" style="margin-top:150px;">
        <div class="container">
       
          <div class="dropdown dropdown-inline">
            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li class="dropdown">
                <a href="#">Another dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu dropdownhover-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#">Another dropdown 2 <span class="caret"></span></a>
                <ul class="dropdown-menu dropdownhover-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="dropdown">
                    <a href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </div>
          
          
          
          
          

        </div>
      </div>
    </div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="dropdown/js/bootstrap-dropdownhover.js"></script>

</body>
</html>
