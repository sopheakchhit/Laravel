	<script type="text/javascript" src="<?php echo e(asset('js/fusioncharts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/fusioncharts.charts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/fusioncharts.theme.fint.js')); ?>"></script>
    <link type="text/css" href="<?php echo e(asset('css/style.css')); ?>"  rel="stylesheet">


<?php $__env->startSection('content'); ?>
<br>
<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row" id="main" >

    <div class="col-ld-12">

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

		
  	<?php $__currentLoopData = $chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<?php
	  	$month=$charts->label;
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
			<td><center><?php echo e($loop->index+1); ?></center></td>
			<td><center><?php echo e($m); ?></center></td>
		  	<td><center> <?php echo e($charts->value); ?></center></td>
		  	
  		</tr>
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>	
	</div>
	</div><!--  end panel -->
    </div>
	

        <div class="col-md-8">
        <div class="panel panel-success">
        	<div class="panel panel-heading"><i class="fa fa-bar-chart"></i> CHART</div>
        	<div class="panel-body">
        		

        	<?php
        	
        		# code...
        	$i=0;
        	foreach($chart as $charts){
        			${"l".$i}=$charts->label;
        			${"v".$i}=$charts->value;
        	$i++;		
        	}
        	$chartdata='{
                "chart": {
                    "caption": "Products Quantity sold per month 2018",
                    "numberSuffix": "",
                    "paletteColors": "#876EA1",
                    "useplotgradientcolor": "0",
                    "plotBorderAlpha": "0",
                    "bgColor": "#FFFFFFF",
                    "canvasBgColor": "#FFFFFF",
                    "showValues":"1",
                    "showCanvasBorder": "0",
                    "showBorder": "0",
                    "divLineColor": "#DCDCDC",
                    "alternateHGridColor": "#DCDCDC",
                    "labelDisplay": "auto",
                    "baseFont": "Assistant",
                    "baseFontColor": "#153957",
                    "outCnvBaseFont": "Assistant",
                    "outCnvBaseFontColor": "#8A8A8A",
                    "baseFontSize": "13",
                    "outCnvBaseFontSize": "13",
                    "yAxisMinValue":"40",
                    "labelFontColor": "#8A8A8A",
                    "captionFontColor": "#153957",
                    "captionFontBold": "1",
                    "captionFontSize": "20",
                    "subCaptionFontColor": "#153957",
                    "subCaptionfontSize": "17",
                    "subCaptionFontBold": "0",
                    "captionPadding": "20",
                    "valueFontBold": "0",
                    "showAxisLines": "1",
                    "yAxisLineColor": "#DCDCDC",
                    "xAxisLineColor": "#DCDCDC",
                    "xAxisLineAlpha": "15",
                    "yAxisLineAlpha": "15",
                    "toolTipPadding": "7",
                    "toolTipBorderColor": "#D3D3D3",
                    "toolTipBorderThickness": "0",
                    "toolTipBorderRadius": "2",
                    "showShadow": "0",
                    "toolTipBgColor": "#D3D3D3",
                    "theme": "fint"
                  },




                "data": [
                 
                    {
                    "label": "January",
                    "value": "'.$v0.'"
                  },

                  {
                    "label": "February",
                    "value": "'.$v1.'"
                  },

                   {
                    "label": "March",
                    "value": "'.$v2.'"
                  },

                  {
                    "label": "April",
                    "value": "'.$v3.'"
                  },

                  {
                    "label": "May",
                    "value": "'.$v4.'"
                  },

                  {
                    "label": "June",
                    "value": "'.$v5.'"
                  },

                  {
                    "label": "July",
                    "value": "'.$v6.'"
                  },
                                    
            		{
                    "label": "August",
                    "value": "'.$v7.'"
                  },

                  {
                    "label": "September",
                    "value": "'.$v8.'"
                  },

                  {
                    "label": "October",
                    "value": "'.$v9.'"
                  },
               
                {
                    "label": "November",
                    "value": "'.$v10.'" 
                  },

                  {
                    "label": "December",
                    "value": "'.$v11.'"
                  },
                ]
            }';

            $barChart = new FusionCharts("column2d", "myFirstChart" , 700, 527, "chart", "json",$chartdata
             );

        $barChart->render();
    ?>
   	
    <div id="chart"> </div>

        	</div>
        	
        </div>
        </div>

</div>




</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>