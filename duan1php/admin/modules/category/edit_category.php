<?php
if (is_array($itemsid)) {
    $ten_danhmuc = isset($itemsid['category']) ? $itemsid['category'] : '';
    $id_dm = isset($itemsid['itemsid']) ? $itemsid['itemsid'] : 0;
} else {
    // Thiết lập giá trị mặc định nếu $id_dm không phải là một mảng
    $ten_danhmuc = '';
    $id_dm = 0;
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý danh mục</a></li>
            <li class="active">cập nhật danh mục</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa và cập nhật danh mục</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                        <form action="index.php?page=update_category"  method="post">
                            <div class="form-group">
                                <label>Tên loại </label>
                                <input required type="text" name="category" class="form-control" value="<?php echo $ten_danhmuc; ?>">
                            </div>
                            <input type="hidden" name="itemsid" value="<?php echo $id_dm; ?>">
                            <input onclick=" return confirmDel();" name="submit_category" type="submit" class="btn btn-success"></input>
                            <input type="reset" class="btn btn-default"></input>
                        </div>
                        <?php 
                              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>
                    </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    
</div>	<!--/.main-->	

<script>
    function preview() {
        prd_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function confirmDel() {
        return confirm("Bạn có chắc chắn muốn cập nhật lại không?");
    }
</script>