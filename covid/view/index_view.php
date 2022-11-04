<?php include('view/layouts/header_view.php') ?>
<!--content-->
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-3">Thong tin dich benh Covid-19</h1>
            <div class="row">
                <!--thong tin ca nhiem-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Thong tin ca nhiem
                        </div>
                        <div class="card-body">
                            <?php if(!empty($global['NewConfirmed'])&& !empty($global['TotalConfirmed'])): ?>
                                <p class="card-text">- Ca moi nhiem:<?= number_format($global['NewConfirmed']);?></p>
                                <p class="card-text">-Tong ca nhiem <?=number_format($global['TotalConfirmed']);?></p>
                            <?php else: ?>
                                <p class="card-text">khong co so lieu</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--thong tin ca tu vong-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Thong tin tu vong
                        </div>
                        <div class="card-body">
                            <?php if(!empty($global['NewDeaths'])&& !empty($global['TotalDeaths'])): ?>
                                <p class="card-text">- Ca tu vong moi:<?= number_format($global['NewDeaths']);?></p>
                                <p class="card-text">-Tong ca tu vong <?=number_format($global['TotalDeaths']);?></p>
                            <?php else: ?>
                                <p class="card-text">khong co so lieu</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!--thong tin ca khoi benh-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Thong tin ca khoi benh
                        </div>
                        <div class="card-body">
                            <?php if(!empty($global['NewRecovered'])&& !empty($global['TotalRecovered'])): ?>
                                <p class="card-text">- Ca tu vong moi:<?= number_format($global['NewRecovered']);?></p>
                                <p class="card-text">-Tong ca tu vong <?=number_format($global['TotalRecovered']);?></p>
                            <?php else: ?>
                                <p class="card-text">khong co so lieu</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </d iv>
        </div>
    </div>
</div>

<?php include('view/layouts/footer_view.php') ?>