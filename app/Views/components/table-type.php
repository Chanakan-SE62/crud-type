<div class="div-table-type">
    <table class="table table-striped">
        <thead class="thead-type">
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อหมวดหมู่</td>
                <td></td>
            </tr>
        </thead>
        <tbody class="tbody-type">
            <?php foreach ($query as $value) { ?>
                <tr>
                    <td class="id-type"><?= $value['categoryId'] ?></td>
                    <td><lable><?= $value['name_category'] ?></lable></td>
                    <td class="button-table-type">
                        <button type="button" class="btn btn-warning btn-edit" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                            <i class="fas fa-edit"></i> &nbsp;<a href="/type/<?= $value['categoryId'] ?>" style="text-decoration: none; color: black;">แก้ไข</a>
                        </button>
                        <button type="button" class="btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-trash-alt"></i> &nbsp;ลบ
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- แก้ไข -->
<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-title-edit" id="staticBackdropLabel">แก้ไขหมวดหมู่</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/AdminController/updateData" method="POST">
                <div class="modal-body-edit">
                    <input type="hidden" class="form-control form-control-edit" value="<?= $data['categoryId'] ?>" name="categoryId">
                    <label class="form-label form-label-edit">ชื่อหมวดหมู่</label>
                    <input type="text" class="form-control form-control-edit" value="<?= $data['name_category'] ?>" name="name_category">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel-edit" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary btn-ok-edit">ยืนยัน</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ลบ -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-title-delete" id="exampleModalLabel">ลบหมวดหมู่</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body-delete">
                <label class="form-label form-label-delete">คุณต้องการลบหมวดหมู่ <?php echo('') ?> ไหม?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-cancel-delete" data-bs-dismiss="modal">ยกเลิก</button>
                <a href="/delete/<?= $value['categoryId'] ?>">
                    <button type="button" class="btn btn-danger btn-ok-delete">
                        ลบ
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>