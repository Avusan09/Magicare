
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="/admin/stockist" method="POST">
        {{csrf_field()}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Stockists</h4>
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
                    <input type="text" id="form29" name="customer_name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Customer Name</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="number" id="form32" name="quantity_sold" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">Quantity Sold</label>
                </div>

                {{--<div class="md-form">--}}
                    {{--<i class="fa fa-pencil prefix grey-text"></i>--}}
                    {{--<textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>--}}
                    {{--<label data-error="wrong" data-success="right" for="form8">Your message</label>--}}
                {{--</div>--}}

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-unique">Create Stockists<i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>

</form>
</div>
<br><br>
<style>
    .md-form input[type="text"], .md-form input[type="email"], .md-form input[type="password"], .md-form input[type="number"], .md-form input[type="textarea"] {
        height: 30px !important;
        border: 2px solid aliceblue;
        padding: 10px;
        font-weight: 700;
        width: 85%;
    }
</style>