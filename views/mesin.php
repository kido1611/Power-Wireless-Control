<?php 
    $dataProblem = array();
?>

<div class="pwc-container justify-content-center">
    <div class="pwc-card-bg pwc-card pwc-card-small">
        <div class="pwc-card-title">
            Temperature &#38; Humidity
        </div>
        <div class="pwc-card-body">
            <div class="pwc-card-body-item">
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["suhu"]?>&deg;c</span>
                <?php 
                    if($dataMesin["suhu"] < 20){
                        echo "<span class=\"pwc-card-body-item-label\">Cool</span>";
                    }
                    else {
                        echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">Heat</span>';
                    }
                ?>
            </div>
            <div class="pwc-card-body-item pwc-card-body-item-right">
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["kelembapan"]?>%</span>
                <?php 
                    if($dataMesin["kelembapan"] >= 60){
                        echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">Wet</span>';
                    }
                    else {
                        echo '<span class="pwc-card-body-item-label">Dry</span>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="pwc-card-bg pwc-card pwc-card-small">
        <div class="pwc-card-title">
            Gas Condition
        </div>
        <div class="pwc-card-body">
            <div class="pwc-card-body-item">
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["gas"]?>%</span>
                <?php
                    if($dataMesin["gas"] >= 50){
                        echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">in a warm condition</span>';
                    }
                    else {
                        echo '<span class="pwc-card-body-item-label ">in a mint condition</span>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="pwc-card-bg pwc-card pwc-card-small">
        <div class="pwc-card-title">
            Motor RPM
        </div>
        <div class="pwc-card-body">
            <div class="pwc-card-body-item">
                <!-- <div style="font-size: 0.7em;">RPM</div> -->
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["rpm"]?></span>
                <?php 
                    echo "<span class=\"pwc-card-body-item-label\">of 200 RPM</span>";
                    // if($dataMesin["suhu"] < 20){
                    //     echo "<span class=\"pwc-card-body-item-label\">Cool</span>";
                    // }
                    // else {
                    //     echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">Heat</span>';
                    // }
                ?>
            </div>
            <div class="pwc-card-body-item pwc-card-body-item-right">
                <!-- <div style="font-size: 0.7em;">PCS/Minute</div> -->
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["kelembapan"]?></span>
                <?php 
                    echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">of 4500 pcs</span>';
                    // if($dataMesin["kelembapan"] >= 60){
                    //     echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">Wet</span>';
                    // }
                    // else {
                    //     echo '<span class="pwc-card-body-item-label">Dry</span>';
                    // }
                ?>
            </div>
        </div>
    </div>
    <div class="pwc-card-bg pwc-card pwc-card-small">
        <div class="pwc-card-title">
            Current Analysis
        </div>
        <div class="pwc-card-body">
            <div class="pwc-card-body-item">
                <span class="pwc-card-body-item-value"><?php echo $dataMesin["arus"]?>A</span>
                <?php
                    if($dataMesin["arus"] >= 1.5){
                        echo '<span class="pwc-card-body-item-label pwc-card-body-item-label-danger">Bad</span>';
                    }
                    else {
                        echo '<span class="pwc-card-body-item-label ">Good</span>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="pwc-container">
    <div class="pwc-card-bg pwc-card pwc-card-big" style="height: auto; min-width: 300px;">
        <div class="pwc-card-title">
            Production Flow Analysis
        </div>
        <div class="pwc-card-body" style="padding: 8px 4px;">
            <div class="pwc-card-body-item process-analytic-item process-analytic-item-success">Process 1</div>
            <?php 
                if($dataMesin["count1"] != $dataMesin["count2"]){
                    echo '<div class="pwc-card-body-item process-analytic-item">Process 2</div>';
                    array_push($dataProblem, 2);
                }
                else {
                    echo '<div class="pwc-card-body-item process-analytic-item process-analytic-item-success">Process 2</div>';
                }
            ?>
            <?php 
                if($dataMesin["count2"] != $dataMesin["count3"]){
                    echo '<div class="pwc-card-body-item process-analytic-item">Process 3</div>';
                    array_push($dataProblem, 3);
                }
                else {
                    echo '<div class="pwc-card-body-item process-analytic-item process-analytic-item-success">Process 3</div>';
                }
            ?>
            <?php 
                if($dataMesin["count3"] != $dataMesin["count4"]){
                    echo '<div class="pwc-card-body-item process-analytic-item">Process 4</div>';
                    array_push($dataProblem, 4);
                }
                else {
                    echo '<div class="pwc-card-body-item process-analytic-item process-analytic-item-success">Process 4</div>';
                }
            ?>
        </div>
        <div class="pwc-card-body">
            Status :&nbsp;
            <?php 
                if(count($dataProblem) < 1){
                    echo '<span class="process-analytic-item-status">RUNNING</span>';
                }
                else {
                    echo '<span class="process-analytic-item-status process-analytic-item-status-alert"> PROBLEM IN PROCESS ';
                    $i = 0;
                    foreach($dataProblem as $problem){
                        echo $problem;
                        if($i != count($dataProblem)-1){
                            echo ",";
                        }
                        $i++;
                    }
                    echo '</span>';
                }
            ?>
        </div>
        <div class="pwc-card-body">
            Current Product : <?php echo $dataMesin["idProduk"]?>
        </div>
        <div class="pwc-card-body">
            Target : 150000
        </div>
        <div class="pwc-card-body">
            Progress :&nbsp;<progress max="100" value="80"></progress>&nbsp;80%
        </div>
        <div class="pwc-card-body">
            <div class="pwc-card-body-item text-left p-0">
                Start time : -
            </div>
            <div class="pwc-card-body-item text-left p-0">
                End time : - 
            </div>
        </div>
    </div>
    <div class="pwc-card-bg pwc-card pwc-card-big" style="height: auto; min-width: 300px;">
        <div class="pwc-card-title">
            Production Summary
        </div>
    </div>
</div>
