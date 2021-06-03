<style>
    .col-3 img{
        width: 50%;
        height: 50%;
        margin: 0% 0% 0% 25%;
    }
</style>

<div class="categories">
    <h1 class="title">
        <center>NEW ARRIVALS</center>
    </h1>
    <div class="small-container">
        <div class="row" id="change">
            <div class="col-3">
                <section>
                    <img class="mySlide" src="image/calcourse/attack-on-titan.jpg">
                    <img class="mySlide" src="image/calcourse/gatsby-vi-dai.jpg">
                    <img class="mySlide" src="image/calcourse/giai-ma-me-cung.jpg">
                </section>
            </div>
            <div class="col-3">
                <img class="mySlide1" src="image/calcourse/haikyuu.jpg">
                <img class="mySlide1" src="image/calcourse/sach-dac-nhan-tam.jpg">
                <img class="mySlide1" src="image/calcourse/it.jpg">
            </div>
            <div class="col-3">
                <img class="mySlide2" src="image/calcourse/tokyo-ghoul.jpg">
                <img class="mySlide2" src="image/calcourse/rich-habits.jpg">
                <img class="mySlide2" src="image/calcourse/harry-potter.jpg">
            </div>

            <script>
            var myIndex = 0;
            var myIndex1 = 0;
            var myIndex2 = 0;
            carousel();
            carousel1();
            carousel2();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlide");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3000);
            }

            function carousel1() {
                var i1;
                var x1 = document.getElementsByClassName("mySlide1");
                for (i1 = 0; i1 < x1.length; i1++) {
                    x1[i1].style.display = "none";
                }
                myIndex1++;
                if (myIndex1 > x1.length) {
                    myIndex1 = 1
                }
                x1[myIndex1 - 1].style.display = "block";
                setTimeout(carousel1, 3000);
            }

            function carousel2() {
                var i2;
                var x2 = document.getElementsByClassName("mySlide2");
                for (i2 = 0; i2 < x2.length; i2++) {
                    x2[i2].style.display = "none";
                }
                myIndex2++;
                if (myIndex2 > x2.length) {
                    myIndex2 = 1
                }
                x2[myIndex2 - 1].style.display = "block";
                setTimeout(carousel2, 3000);
            }
            </script>

        </div>
    </div>
</div>