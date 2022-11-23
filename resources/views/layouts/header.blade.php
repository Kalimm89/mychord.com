<div class="header">
    <div class="header-bot">
        
        <div class="wrap">
            <div class="header-bot1">
                <div class="logo">
                    {{-- <a href="index.html"><img src="/public/assets/user/images/logo.png" alt=""></a> --}}
                    <h1 class="fw-bold fs-1">Mychord.com</h1>
                </div>
                <div class="ph-no">
                    <div class="search_box">
                        <form method="get" action="{{ route('search') }}">
                            <input type="text" name="s" value="" required>
                                <input type="submit"
                                value="">
                        </form>
                    </div>
                    {{-- <a href="#"><div class="cart">
                        <span class="cart_title">Cart(empty)</span>
                        <img src="/public/assets/user/images/marker.png" alt=""/><div class="clear"></div>
                   </div></a> --}}
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>