
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="/admin/sales" method="POST">
        {{csrf_field()}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Create Sales</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="form34" name="product_name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Product Name</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="form29" name="product_code" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form29">Product Code</label>
                    </div>

                   <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="form29" name="pack" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form29">Pack</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number" id="form32" name="opening_stock" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Opening Stock</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  name="purchased_stock" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Purchased Stock</label>
                    </div>

                     <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  id="#total_stock" name="total_stock" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Total Stock</label>
                    </div>

                     <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  name="sales" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Sales</label>
                    </div>

                     <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  id="clear_stock" name="clear_stock" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Clear Stock</label>
                    </div>

                     <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  name="l_rate" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">L.Rate</label>
                    </div>

                     <div class="md-form mb-5">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="number"  name="st_value" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">St. Value</label>
                    </div>

                    {{--<div class="md-form">--}}
                    {{--<i class="fa fa-pencil prefix grey-text"></i>--}}
                    {{--<textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>--}}
                    {{--<label data-error="wrong" data-success="right" for="form8">Your message</label>--}}
                    {{--</div>--}}

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-unique">Create Sales<i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>

    </form>
</div>
<br><br>
