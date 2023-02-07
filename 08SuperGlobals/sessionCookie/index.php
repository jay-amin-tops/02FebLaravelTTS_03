<?php
include("header.php");
// include("header1.php");  //Warning: include(header1.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\laravel\02FebLaravelTTS_03\08SuperGlobals\sessionCookie\index.php on line 3

// include("header.php")
// include("header.php"); 
?>
<style>
    body {
  font-style: sans-serif;
}

a {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

h3 {
  line-height: 3em;
}
.card-deck {
    display: flex;
}
.card {
  max-width: 16rem;
}

.card:hover {
  box-shadow: 1px 2px 10px lightgray;
  transition: 0.2s;
}

.card-header {
  font-size: 13px;
  color: gray;
  background-color: white;
}

.text-muted {
  font-size: 11px;
}

.card-footer{
  font-weight: bold;
  font-size: 18px;
  background-color: white;
}
</style>
<div class="container">
  <h3>Catalog</h3>
  <div class="card-deck">
    <div class="card text-center">
      <a href="#">
        <div class="card-header">
          Hit!
        </div>
        <img class="card-img-top" src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=043d89cbf03cbdbbe8ed9f9e5e44ce6f" alt="Card image">
        <div class="card-body">
          <p class="card-text text-muted">Category name</p>
          <a href="#"><h5 class="card-title">Very long item name</h5></a>
          <div class="card-footer">
            3000$
          </div>
        </div>
      </a>
    </div>
    <div class="card text-center">
      <a href="#">
        <div class="card-header">
          Hit!
        </div>
        <img class="card-img-top" src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=043d89cbf03cbdbbe8ed9f9e5e44ce6f" alt="Card image">
        <div class="card-body">
          <p class="card-text text-muted">Category name</p>
          <a href="#"><h5 class="card-title">Very long item name</h5></a>
          <div class="card-footer">
            3000$
          </div>
        </div>
      </a>
    </div>
    <div class="card text-center">
      <a href="#">
        <div class="card-header">
          Hit!
        </div>
        <img class="card-img-top" src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=043d89cbf03cbdbbe8ed9f9e5e44ce6f" alt="Card image">
        <div class="card-body">
          <p class="card-text text-muted">Category name</p>
          <a href="#"><h5 class="card-title">Very long item name</h5></a>
          <div class="card-footer">
            3000$
          </div>
        </div>
      </a>
    </div>
    <div class="card text-center">
      <a href="#">
        <div class="card-header">
          Hit!
        </div>
        <img class="card-img-top" src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=043d89cbf03cbdbbe8ed9f9e5e44ce6f" alt="Card image">
        <div class="card-body">
          <p class="card-text text-muted">Category name</p>
          <a href="#"><h5 class="card-title">Very long item name</h5></a>
          <div class="card-footer">
            3000$
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- <div id="content">

    <div class="page">
        <div class="wrapper">
            <div class="row">

                <div class="w-100"></div>
                <div class="col">
                    <h2 class="form-title"><span>All Products</span></h2>

                    <table class="table">
                        <thead>
                            <tr class="first">
                                <th>Image</th>
                                <th>Product Name</th>
                                <th class="a-center">Stock</th>
                                <th class="a-center">Price</th>
                                <th class="a-center">Cateogry</th>
                                <th class="a-right">Published</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                            <tr class="last">
                                <td>
                                    <a href=#><img src="https://via.placeholder.com/80x80"></a>
                                </td>
                                <td>Lorem Ipsum</td>
                                <td class="a-center">3</td>
                                <td class="a-center">$2.50</td>
                                <td class="a-center">Breakfast</td>
                                <td class="a-right">08/08/2018</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
</body>

</html>
</body>

</html>