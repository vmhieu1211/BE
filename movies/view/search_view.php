<?php 
if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
?>
<?php if(empty($dataSearch['results'])):?>
    <div class="row">

        <div class="row">
            <div class="col">
                <h5>Khong co du lieu bo phim ban can tim kiem</h5>
            </div>
        </div>
        </div>
    <?php else:?>
        <div class="row">
        <?php foreach($dataSearch['results'] as $item): ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w300<?= $item['poster_path'];?>" class="card-img-top" alt="<?= $item['title'];?>">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
            </div>
         <?php endforeach; ?>
</div>

<?php endif; ?>
