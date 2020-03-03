<?php 
    //connect
    include('connect.php');

    $sql = "SELECT * FROM income ORDER BY id DESC LIMIT 10";
    $result = $conn->query($sql);
?>


<div class="row">
    <div class="col-lg-9">
        <h2 class="title-1 m-b-25">Earnings By Items</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>date</th>
                        <th>website</th>
                        <th>source</th>
                        <th class="text-right">payment (&#2547;) </th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td> <?php echo $rows['pdate'] ?> </td>
                            <td> <?php echo $rows['web']; ?> </td>
                            <td> <?php echo $rows['source']; ?> </td>
                            <td class="text-right"> <?php echo $rows['payment']; ?> </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-3">
        <h2 class="title-1 m-b-25">Top countries</h2>
        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
            <div class="au-card-inner">
                <div class="table-responsive">
                    <table class="table table-top-countries">
                        <tbody>
                            <tr>
                                <td>United States</td>
                                <td class="text-right">$119,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$70,261.65</td>
                            </tr>
                            <tr>
                                <td>United Kingdom</td>
                                <td class="text-right">$46,399.22</td>
                            </tr>
                            <tr>
                                <td>Turkey</td>
                                <td class="text-right">$35,364.90</td>
                            </tr>
                            <tr>
                                <td>Germany</td>
                                <td class="text-right">$20,366.96</td>
                            </tr>
                            <tr>
                                <td>France</td>
                                <td class="text-right">$10,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$5,366.96</td>
                            </tr>
                            <tr>
                                <td>Italy</td>
                                <td class="text-right">$1639.32</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>