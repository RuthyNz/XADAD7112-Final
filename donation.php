<?php include('shared/_header.php'); ?>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="./images/shape.png" alt="" class="shape" />

            <?php include('shared/_navbar.php'); ?>

            <div class="container mt-5">
                <div class="card border-0 shadow donation-card">
                    <div class="card-body mt-5 mb-2 mx-3 ">
                        <h3 class="card-title">
                            <span class="text-primary icon-hover"><i class="fa-solid fa-donate"></i></span>    
                            Support Our Cause
                        </h3>
                        <p class="card-text fs-5 text-justify">
                            Join us in making a difference. Every donation, no matter how small, contributes to a larger impact. Together, we can build a brighter future. Thank you for your generosity and support.
                        </p>
                    </div>

                    <div class="mb-4" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                        <img style="width: 50px;" src="./images/donateIcon.png" class="card-img-bottom" alt="Support Our Cause">
                    </div>

                    <!-- Donation Form -->
                    <form action="https://www.paypal.com/donate" method="post" target="_blank" class="mx-3 mb-4">
                        <!-- PayPal Business ID -->
                        <input type="hidden" name="business" value="your_paypal_business_id@example.com">
                        
                        <!-- Donation Page Configuration -->
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="item_name" value="Support Our Cause">
                        
                        <div class="mb-3">
                            <label for="donorName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="donorName" name="donorName" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationAmount" class="form-label">Donation Amount (USD)</label>
                            <input type="number" class="form-control" id="donationAmount" name="amount" required min="1" step="any" placeholder="e.g., 20.00">
                        </div>
                        
                        <!-- Payment Button (PayPal) -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-hand-holding-heart"></i> Donate Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('shared/_footer.php'); ?>
</body>
