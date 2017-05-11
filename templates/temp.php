<svg id="fillgauge1" width="97%" height="250" onclick="gauge1.update(NewValue());"></svg>
<script language="JavaScript">
    var config1 = liquidFillGaugeDefaultSettings();

    var gauge1= loadLiquidFillGauge("fillgauge1", 50, config1);

    function NewValue(){
        if(Math.random() > .5){
            return Math.round(Math.random()*100);
        } else {
            return (Math.random()*100).toFixed(1);
        }
    }
</script>
