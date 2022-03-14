<style>
    .div-table-type {
        display: flex;
        justify-content: center;
    }

    .table-striped {
        margin-top: 5%;
        width: 40%;
    }

    .thead-type {
        background-color: #EF5DA8;
        color: white;
    }

    .btn-edit {
        border-radius: 20px;
    }

    .btn-delete {
        border-radius: 20px;
    }
</style>

<div class="div-table-type">
    <table class="table table-striped">
        <thead class="thead-type">
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อหมวดหมู่</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ภูเขา</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                        แก้ไข
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ลบ
                    </button>
                </td>
            </tr>
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