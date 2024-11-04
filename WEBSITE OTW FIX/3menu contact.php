<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }
        .faq-container {
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .faq-question {
            cursor: pointer;
            font-weight: bold;
        }
        .faq-answer {
            display: none; /* Tersembunyi secara default */
            margin-top: 10px;
        }
    </style>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <div class="header">
                <div class="navv">
                    <a href="">MENU</a>
                </div>
                <img src="./copy_logo-removebg-preview.png" width="150px">
                <h1>
                    Cozy Like Your Home
                </h1>
            </div>
        </div> 
        <div class="main">
            <div class="intro">
                <h1>
                    Contact Penginapan Amelia
                </h1>
                <p>
                    Please use this form to ask a question, request information, or send feedback about our homestay. All submissions will be reviewed and you will receive a response promptly.
                </p>
                <div class="clear"></div>
            </div>
            <div class="contact-form">
                <form action="submit_contact.php" method="POST">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="fullname">FULL NAME:</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        <div class="form-field">
                            <label for="email">EMAIL ADDRESS:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="subject">SUBJECT:</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-field">
                        <label for="comment">COMMENTS:</label>
                        <textarea id="message" name="message" rows="5"></textarea>
                    </div>
                    <p>
                        The content of the iFrame below belongs to a 3rd party. As such, the accessibility of this iFrame is beyond our control. If you have any difficulty interacting with this content, please call us at (0411) 586216 or email us at penginapanamelia@google.com.
                    </p>
                    <!-- <div class="form-group">
                        <label>
                            <input type="checkbox" id="robot-check" name="robot-check" required>
                            I am not a robot
                        </label>
                        Jika Anda ingin menggunakan reCAPTCHA dari Google, berikut adalah langkah-langkahnya:
                        Daftar untuk mendapatkan API Key:
                        Kunjungi Google reCAPTCHA.
                        Daftar dan buat proyek baru untuk mendapatkan kunci situs (site key) dan kunci rahasia (secret key).
                        Tambahkan reCAPTCHA ke Form HTML: Masukkan script reCAPTCHA di bagian <head> dan tambahkan elemen reCAPTCHA di form Anda: <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    </div> -->
                    <div class="button-group">   
                        <button type="reset">CLEAR FORM</button>
                        <button type="submit">SUBMIT EMAIL</button>
                    </div>
                </form>
            </div>
            <div class="reviews">
                <h2>Customer Reviews</h2>
                <form action="submit_review.php" method="POST">
                    <div class="rev-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="rev-group">
                        <label for="review">Review:</label>
                        <textarea id="review" name="review" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit Review</button>
                </form>
            </div>
            <div class="faq-container">
                <h1>Frequently Asked Questions</h1>
            
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        1. What are the standard check-in and check-out times?
                    </div>
                    <div class="faq-answer">
                        Standard check-in is 3:00 PM. Standard check-out is 11:00 AM.

                        If you arrive before 3:00 PM and your room is not available, we can store your luggage at the Bell Desk.
                        
                        Please note that late check-out requests are subject to availability and occupancy on the date of departure and additional charges may apply.
                    </div>
                </div>
            
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        2. What is the cancellation policy?
                    </div>
                    <div class="faq-answer">
                        Cancellations for a hotel room or suite reservation must be received 24 hours (48 hours for Presidential Suites) before the expected day of arrival and may differ by arrival date and room type.

                        If cancellation of a guaranteed reservation is not received by the required date, the hotel will charge for one night’s accommodation. For details of cancellation policies and deposit requirements, please check at the time of booking.
                    </div>
                </div>
            
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        3. What is the minimum age required to book a reservation?
                    </div>
                    <div class="faq-answer">
                        Guests must be 21 years or older with photo identification to check-in.
                    </div>
                </div>
            
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        4. How do I pre-order In-Room Dining?
                    </div>
                    <div class="faq-answer">
                        You can contact our customer service via email at penginapanamelia@google.com or by phone at (0411) 586216.
                    </div>
                </div>
            </div>
            
            <script>
                function toggleAnswer(element) {
                    const answer = element.nextElementSibling;
                    if (answer.style.display === "none" || answer.style.display === "") {
                        answer.style.display = "block"; // Tampilkan jawaban
                    } else {
                        answer.style.display = "none"; // Sembunyikan jawaban
                    }
                }
            </script>
            
            <div class="schedule">
                <h4>
                    CHECK-IN TIME
                </h4>
                <h5>
                    3:00 PM
                </h5>
                <h4>
                    CHECK-OUT TIME
                </h4>
                <h5>
                    12:00 AM
                </h5>
                <h4>
                    ADDRESS
                </h4>
                <h5>
                    Jalan Poros Pangkajene-Parepare
                </h5>    
                <h4>
                    MODIFY OR CANCEL RESERVATIONS
                </h4>
                <h5>
                    Direct (0411) 586216
                </h5>
                <h6>
                    *prices start from, based on a one night stay in a standard double room for two guests. Supplementary services, breakfast and tourist/city tax are not included. price observed on penginapanamelia.com withinthe past 24 hours, for a one night stay within the next eight days, starting tomorrow. price subject to the hotel conditions, period and availability. depending on the country, these prices may not include taxes, may include VAT only or may include all taxes (VAT and tourist/city tax). when prices do not include all taxes, the relevant taxes (VAT and tourist/city tax) will be stated in the forthcoming stages of the reservation process. the price is only guaranteed at the time of reservation.
                </h6>
                <div class="clear"></div> 
            </div>
        </div>   
    <div class="footer">
        <div class="container1">
            <h5>
                 ABOUT
            </h5>
            <h5>
                CONTACT
            </h5>
            <h5>
                TERMS & CONDITIONS
            </h5>
            <h5>
                PRIVACY POLICY
            </h5>
            <h5>
                CANCELLATION POLICY
            </h5>
            <h5>
                SITEMAP
            </h5>
        </div>
        <div class="container2">
            <div class="box1">
                <h3>
                    FOLLOW US
                </h3>
                <img src="./logo-facebookpng-32247.png" width="30px">
                <img src="./logo-ig-png-32453.png" width="30px">
                <div class="clear"></div>
                <h6>
                    Copyright &copy;2024 All rights reserved
                </h6>
                <h6>
                    This template is made by Rizki Amalia
                </h6>
            </div>
            <div class="box2">
                <img src="./copy_logo-removebg-preview.png" alt="logo" width="150px">
            </div>
            <div class="box3">
                <h3>
                    CONNECT WITH US
                </h3>
                <br>
                <h6>
                    PENGINAPAN AMELIA
                </h6>
                <h6>
                    JL. POROS PANGKAJENE-PAREPARE, BOTTOE
                </h6>
                <br>
                <h6>
                    LOCAL: 0411-586216
                </h6>
            </div>
        </div>
    </div>
    </div>
</body>
</html>