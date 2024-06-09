<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			text-decoration: none;
			list-style: none;
			box-sizing: border-box;
		}
		.main-menu {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  position: relative;
}

.main-menu > li {
  position: relative;
}

.sub-menu {
  display: none;
  position: absolute;
  list-style: none;
  padding: 0;
  margin: 0;
  top: 100%;
  left: 0;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.main-menu:hover .sub-menu {
  display: block;
  opacity: 1;
}

.main-menu > li > a:hover,
.main-menu > li:hover > a {
  background-color: #f0f0f0;
}

.sub-menu > li > a:hover {
  background-color: #e0e0e0;
}

.main-menu > li:hover > a {
  background-color: #d0d0d0;
}
	</style>
</head>
<body>
	<nav>
  <ul class="main-menu">
    <li>
      <a href="#">MENU-1</a>
      <ul class="sub-menu">
        <li><a href="#">SubMenu-1</a></li>
        <li><a href="#">SubMenu-2</a></li>
        <li><a href="#">SubMenu-3</a></li>
        <li><a href="#">SubMenu-4</a></li>
      </ul>
    </li>
    <li>
      <a href="#">MENU-2</a>
      <ul class="sub-menu">
        <li><a href="#">SubMenu-1</a></li>
        <li><a href="#">SubMenu-2</a></li>
        <li><a href="#">SubMenu-3</a></li>
        <li><a href="#">SubMenu-4</a></li>
      </ul>
    </li>
    <li>
      <a href="#">MENU-3</a>
      <ul class="sub-menu">
        <li><a href="#">SubMenu-1</a></li>
        <li><a href="#">SubMenu-2</a></li>
        <li><a href="#">SubMenu-3</a></li>
        <li><a href="#">SubMenu-4</a></li>
      </ul>
    </li>
    <li>
      <a href="#">MENU-4</a>
      <ul class="sub-menu">
        <li><a href="#">SubMenu-1</a></li>
        <li><a href="#">SubMenu-2</a></li>
        <li><a href="#">SubMenu-3</a></li>
        <li><a href="#">SubMenu-4</a></li>
      </ul>
    </li>
  </ul>
</nav>
</body>
</html>