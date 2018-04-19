<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap/dist/css/bootstrap.min.css')}}">


        <script type="text/javascript" src="{{URL::asset('js/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/popper.js/dist/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('css/bootstrap/dist/js/bootstrap.min.js')}}"></script>

       <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    </head>
    <body>
        <!-- Page Content -->
        <div class="container">

          <!-- Portfolio Item Heading -->
          <h1 class="my-4">Victoria Court
            <small>Suites</small>
          </h1>

          

          <!-- Portfolio Item Row -->
          <div class="row">

            <div class="col-md-8">
                <!-- Related Projects Row -->
                <h3 class="my-4">ROOMS</h3>

                <div class="row">

                  <div class="col-md-6 col-sm-6 mb-4">
                    <a id="rm1" href="#" class="rm" data-name="Room 1" data-price="100.00">
                      <img class="img-fluid rm1" src="{!! asset('img/room1.png')!!}" alt="" >
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6 mb-4">
                    <a id="rm2" href="#" class="rm" data-name="Room 2" data-price="200.00">
                      <img class="img-fluid rm2" src="{!! asset('img/room2.png')!!}" alt="" >
                    </a>
                  </div>

                </div>
                <input type="hidden" id="rmValue">
                <div class="row">

                  <div class="col-md-6 col-sm-6 mb-4">
                    <a id="rm3" href="#" class="rm" data-name="Room 3" data-price="300.00">
                      <img class="img-fluid rm3" src="{!! asset('img/room3.png')!!}" alt="" >
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6 mb-4">
                    <a id="rm4" href="#" class="rm" data-name="Room 4" data-price="400.00">
                      <img class="img-fluid rm4" src="{!! asset('img/room4.png')!!}" alt="" >
                    </a>
                  </div>

                </div>
                <!-- /.row -->
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Invoice</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="width: 100%;" id="invoice">
                              <thead>
                                 <tr>
                                    <th style="width: 25%;"><center>Room Name</center></th>
                                    <th style="width: 25%;"><center>Price</center></th>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table style="width: 100%;">
                              <thead>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th style="width: 150px;">Total:</th>
                                    <td><input type="number" style="width: 100%;" id="total" class="textbox form-control" value="0.00" name="" readonly></td>
                                 </tr>
                              </tbody>
                            </table>
                          </div>
                        <hr>
                        <div class="text-center">
                            <button id="checkout" class="btn btn-success" style="width: 100px" data-toggle="modal" data-target="#breakdownModal">CHECKOUT</button>
                        </div>
                    </div>
                </div>

            </div>

          </div>
          <!-- /.row -->
          <div class="text-center col-md-8 mt-3">
              <div class="row ">

                <div class="col-md-3 col-sm-6 mb-4">
                  <button id="clean" class="btn btn-success deduct" style="width: 100px">Clean</button>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                  <button id="dirty" class="btn btn-primary deduct" style="width: 100px">Dirty</button>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                  <button id="cleaning" class="btn btn-warning deduct" style="width: 100px">Cleaning</button>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                  <button id="occupied" class="btn btn-danger" style="width: 100px">Occupied</button>
                </div>

              </div>
          </div>

        </div>
        <!-- /.container -->

        <!-- Modal -->
        <div class="modal fade" id="breakdownModal" tabindex="-1" role="dialog" aria-labelledby="breakdownModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="breakdownModalLabel">Breakdown</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                    <table style="width: 100%;">
                      <thead>
                      </thead>
                      <tbody>
                         <tr>
                            <th style="width: 150px;">Cash:</th>
                            <td><input type="text" style="width: 100%;" placeholder="Enter Amount:" class="textbox form-control" id="amount"></td>
                         </tr>
                         <tr>
                            <th style="width: 150px;">Total:</th>
                            <td><input type="number" style="width: 100%;" id="total2" class="textbox form-control" value="0.00" name="" readonly></td>
                         </tr>
                         <tr>
                            <th style="width: 150px;">Change:</th>
                            <td><input type="number" style="width: 100%;" id="change" class="textbox form-control" value="0.00" readonly></td>
                         </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="modal-footer">
                <button id="done" type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
              </div>
            </div>
          </div>
        </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.rm').click(function(){
                var x = $(this).attr('id');
                var name = $(this).data('name');
                var price = $(this).data('price');

                $('#rmValue').val(x);
                $('#rmValue').attr('data-name', name);
                $('#rmValue').attr('data-price', price);
            });

            //button click
            $('#clean').click(function(){
                var x = $('#rmValue').val();
                $('.'+x).css({background: "green"});

                var id = $('#rmValue').val();
                $('#tr'+x).remove();
            });

            //button click
            $('#dirty').click(function(){
                var x = $('#rmValue').val();
                $('.'+x).css({background: "blue"});

                var id = $('#rmValue').val();
                $('#tr'+x).remove();
            });

            //button click
            $('#cleaning').click(function(){
                var x = $('#rmValue').val();
                $('.'+x).css({background: "yellow"});

                var id = $('#rmValue').val();
                $('#tr'+x).remove();
            });

            //button click
            $('.deduct').click(function(){
                var total = 0;

                $(".roomCount").each(function() {
                    amount = ($('#amount').val());
                    total+= parseFloat($(this).text());
                });
                $('#total').val(total.toFixed(2));
                $('#total2').val(total.toFixed(2));
            });

            //button click
            $('#occupied').click(function(){
                var x = $('#rmValue').val();
                $('.'+x).css({background: "red"});

                var name = $('#rmValue').attr('data-name');
                var price = $('#rmValue').attr('data-price');

                if(!$("tr[id='tr"+x+"']").length){
                    var markup = "<tr id='tr"+ x +"'><td id='showName'>" + name + "</td><td id='price' class='roomCount'>" + price + "</tr>";
                    $("#invoice").append(markup);
                }

                var total = 0;
                // var vatable = 0;
                // var vatamount = 0;
                $(".roomCount").each(function() {
                    amount = ($('#amount').val());
                    total+= parseFloat($(this).text());
                    // vatable = total / 1.12;
                    // vatamount = total - vatable;
                });
                $('#total').val(total.toFixed(2));
                $('#total2').val(total.toFixed(2));
            });

            //onchange
            $('#amount').keyup(function(){
                var change = $('#amount').val() - $('#total').val();
                $('#change').val(change.toFixed(2));
            });

            //onchange
            $('#done').click(function(){
                location.reload();
            });

            $(".modal").on("hidden.bs.modal", function(){
                $('#amount').val("");
                $('#change').val("0.00");
            });

        });
    </script>

    </body>
</html>
