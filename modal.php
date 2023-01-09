<!-- Modal Edit-->
<div class="modal fade" id="exampleModalToggle<?=$value['id']?>" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Редагувати картку №<?=$value['id'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?id=<?=$value['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>"
                            placeholder="Назва категорії">
                    </div>
                    <div class="form-group my-3">
                        <input type="text" class="form-control" name="edit_description"
                            value="<?=$value['description'] ?>" placeholder="Опис категорії">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_image" value=""
                            placeholder="Посилання на зображення">
                    </div>
                    <p class="text-center fs-6 my-3">Або завантажте картинку...</p>
                    <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <input type="file" class="form-control" name="edit_myfile" accept="image/*">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="edit_submit" class="btn btn-success btn-md">Оновити</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id']?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Видалити картку №<?=$value['id'] ?>???</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="?id=<?=$value['id'] ?>" method="post">
                    <button type="submit" name="delete_submit" class="btn btn-danger">Видалити</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- INFO MODAL -->
<div class="modal fade" id="infoModal<?=$value['id']?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Інформація по картці №<?=$value['id'] ?>.
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img style="width: 600px; height: 400px;" src="<?= $value['image'] ?>" class="card-img-top w-100"
                    alt="<?= $value['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $value['name'] ?></h5>
                    <p class="card-text text-center"><?= $value['description'] ?></p>
                    <form action="">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>