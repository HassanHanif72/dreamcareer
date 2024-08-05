<div class="top-form">
    <div class="container">
        <div class="row form_row">
            <div class="col-lg-12 form-body">
                <form method="POST" action="" class="form-inner needs-validation" novalidate>
                    <input type="text" class="form-control sb" pattern="[A-Za-z ]+" placeholder="Enter your name"
                        name="name" required="">
                    <input type="email" class="form-control sb" id="Email"
                        pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" placeholder="Enter email here" name="email"
                        required="">
                    <input type="number" class="form-control sb" id="Tel"
                        onkeypress="if(this.value.length==12) return false;" placeholder="Enter phone number"
                        name="phone" required="">

                    <input type="text" class="form-control sb" id="Name" placeholder="Enter Address" name="address"
                        required="">
                    <button type="submit" class="btn btn-theme"> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>