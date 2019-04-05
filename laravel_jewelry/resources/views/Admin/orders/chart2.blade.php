@extends('layouts.menubar')

@section('content')
<br>
<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row" id="main" >

<div class="col-md-12">
<center><H3><strong>The Number of Products that Sold per Month in 2018</strong></H3></center>
<hr><br>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel panel-heading"><i class="fa fa-bars"></i> TABLE</div>
            <div class="panel panel-body" style="margin-left: 10px;">
                    <table class="table">
        <tr class="warning">
            <th><center>#</center></th>
            <th><center>Month</center></th>
            <th><center>Products Quantity</center></th>
            
        </tr>

        
    @foreach($chart as $charts)
    <?php
        $month=$charts->labels;
        $m="";
            switch($month)
            {
               case 1:
                $m = "January";
                break;

                case 2:
                $m = "February";
                break;

                case 3:
                $m = "March";
                break;

                case 4:
                $m = "April";
                break;

                case 5:
                $m = "May";
                break;

                case 6:
                $m = "June";
                break;

                case 7:
                $m = "July";
                break;

                case 8:
                $m = "August";
                break;

                case 9:
                $m = "September";
                break;

                case 10:
                $m = "October";
                break;

                case 11:
                $m = "November";
                break;

                case 12:
                $m = "December";
                break;

            }
    ?>
        <tr​>
            <td><center>{{$loop->index+1}}</center></td>
            <td><center>{{$m}}</center></td>
            <td><center> {{$charts->data}}</center></td>
            
        </tr>
    @endforeach
       <tr class="info">
        <td>Forecasting</td>
        <td><center></center></td>
        <td><center></center></td>
     </tr>

    <tr class="info">
        <td></td>
        <td><center>September</center></td>
        <?PHP
        $i=1;
        foreach ($forecas as $item ) {
        ${"sep".$i}=$item->num;
        $i++;
        }?>
              
        <td><center>{{$sep = number_format((float)(collect($sep1+$sep2+$sep3)->sum()/3),2,'.','')}}
        </center></td>
     </tr>

    <tr class="info">
        <?PHP
        $k=1;
        foreach ($forecas1 as $item ) 
        {
        ${"ocb".$k}=$item->num;
        $k++;
        }?>
        <td></td>
         <td><center>October</center></td>
         <td><center>{{$ocb = number_format((float)(collect($ocb1+$ocb2+$sep)->sum()/3),2,'.','')}}
         </center></td>
    </tr>

      <tr class="info">
        <?PHP
        $g=1;
        foreach ($forecas2 as $item ) 
        {
        ${"nov".$g}=$item->num;
        $g++;
        }?>
        <td></td>
         <td><center>November</center></td>
         <td><center>{{$nov = number_format((float)(collect($nov1+$sep+$ocb)->sum()/3),2,'.','')}}</center>
         </td>
     </tr>

    <tr class="info">
        <td></td>
        <td><center>December</center></td>
        <td><center>{{$dec = number_format((float)collect([$sep+$ocb+$nov])->sum()/3,2,'.','')}}</center>
        </td>
    </tr>

    </table>

            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel panel-heading"><i class="fa fa-bar-chart"></i> CHART</div>
            <div class="panel panel-body" style="margin-left: 10px;">
        <center><H3><strong>2018</strong></H3></center>
            <canvas id="myChart"></canvas><br>
            <center><H3><strong>MONTH</strong></H3></center>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
  	</script> -->
    

  <script>
var ctx = document.getElementById("myChart").getContext("2d");
   
var myChart = new Chart(ctx, {
    type: 'bar',

    data: {
        labels: [ <?php foreach ($chart as $charts) { 
            $month=$charts->labels;
        $m="";
            switch($month)
            {
               case 1:
                $m = "January";
                break;

                case 2:
                $m = "February";
                break;

                case 3:
                $m = "March";
                break;

                case 4:
                $m = "April";
                break;

                case 5:
                $m = "May";
                break;

                case 6:
                $m = "June";
                break;

                case 7:
                $m = "July";
                break;

                case 8:
                $m = "August";
                break;

                case 9:
                $m = "September";
                break;

                case 10:
                $m = "October";
                break;

                case 11:
                $m = "November";
                break;

                case 12:
                $m = "December";
                break;

            }
            ?> '{{$m}}',  <?php } ?> ,
        'Forecasting for September','Forecasting for October',
        'Forecasting for November','Forecasting for December'],
        datasets: [{
            label: 'QUANTITY',
            data: [ <?php foreach ($chart as $charts) {?> '{{$charts->data}}', <?php } ?>,
            '{{$sep}}','{{$ocb}}','{{$nov}}','{{$dec}}']
        }]
    },


    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

</script>

</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection()