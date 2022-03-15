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
                            แก้ไข
                        </button>
                        <button type="button" class="btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ลบ
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
                <h5 class="modal-title" id="staticBackdropLabel">แก้ไข</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">ชื่อหมวดหมู่</label>
                <input type="text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<!-- ลบ -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ลบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณต้องการลบหมวดหมู่ ... ไหม?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>