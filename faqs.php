
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>FAQs | Florette Relocations | Moving service company</title>
    <meta name="description" content="Florette Relocations, the leader in Moving service company industry, we are committed to creating value through our quality services and personalized care."/>
    <link rel="canonical" href="<?php echo $base_url;?>enquiry.php" />
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
     
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <header class="page__header position-relative ">
            <img 
                src="assets/images/faqs/faq-bg.webp" 
                srcset="
                    assets/images/faqs/faq-bg-sm.webp 576w,
                    assets/images/faqs/faq-bg-md.webp 1000w,
                    assets/images/faqs/faq-bg.webp 1200w 
                "
                alt="<?php echo $site_name;?>" width="1903" height="448"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
            />
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary opacity-75 "></div>
            <div class="container position-relative z-3">
                <h1 class="display-5 text-white text-uppercase unic_wrap">FAQs</h1>
                <p class="fs-4 fw-light text-white">A collection of the answers to the most <br> common questions people ask about Relocation.</p>
            </div>
        </header>
        <!-- Header Wrapper End -->

        <!-- Frequently Asked Questions start --> 
        <section class="py-5">
            <div class="container my-lg-5">
                <div class="text-center mx-auto mb-4" style="max-width: 50.75rem;">
                    <h2 class="fs-1 fw-light text-13 text-center unic_wrap center text-uppercase">Frequently Asked Questions </h2>
                    <p class="fs-4 text-dark fw-light text-center mb-0">
                        Safety, quality and professionalism in performance 
                    </p> 
                </div>
                <div class="faq__wrapper mx-auto" style=" --plus-circle-icon: url('<?php echo $base_url;?>assets/images/icons/plus.svg'); --minus-circle-icon: url('<?php echo $base_url;?>assets/images/icons/minus.svg');max-width: 85rem;"> 
                    <div class="accordion accordion-flush mt-3 mt-lg-4 mx-auto" id="accordionFaq1">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flushProcess1">
                                <button class="accordion-button lead-sm collapsed active py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo1" aria-expanded="false" aria-controls="flushDo1">
                                    What do professional movers do?
                                </button>
                            </h3>
                            <div id="flushDo1" class="accordion-collapse collapse show" aria-labelledby="flushProcess1" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Professional movers are trained to assist individuals and families in relocating their belongings from one location to another. They handle tasks such as packing, loading, transportation, unloading, and even unpacking, depending on the service level you choose.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flushProcess2">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo2" aria-expanded="false" aria-controls="flushDo2">
                                    How do I choose a reputable moving company?
                                </button>
                            </h3>
                            <div id="flushDo2" class="accordion-collapse collapse" aria-labelledby="flushProcess2" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Research different moving companies by reading reviews, checking their licensing and insurance, and obtaining quotes from multiple sources. Look for companies with a history of positive customer experiences and transparent pricing.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flushProcess3">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo3" aria-expanded="false" aria-controls="flushDo3">
                                    How far in advance should I book movers?
                                </button>
                            </h3>
                            <div id="flushDo3" class="accordion-collapse collapse" aria-labelledby="flushProcess3" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        It’s recommended to book your movers at least 4-8 weeks before your moving date, especially during peak moving seasons (spring and summer). This ensures you have a better chance of securing your desired moving date and company. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess4">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo4" aria-expanded="false" aria-controls="flushDo4">
                                    How are moving costs determined?
                                </button>
                            </h3>
                            <div id="flushDo4" class="accordion-collapse collapse" aria-labelledby="flushProcess4" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Moving costs are typically based on factors such as the distance of the move, the volume and weight of your belongings, the level of service you choose (e.g., full-service vs. self-service), and any additional services you require, such as packing and unpacking.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess5">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo5" aria-expanded="false" aria-controls="flushDo5">
                                    Should I get an in-home estimate?
                                </button>
                            </h3>
                            <div id="flushDo5" class="accordion-collapse collapse" aria-labelledby="flushProcess5" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Getting an in-home estimate allows movers to assess your belongings and provide a more accurate cost estimate. It’s especially useful for larger moves or those with unique items.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess6">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo6" aria-expanded="false" aria-controls="flushDo6">
                                    Do movers provide packing services?
                                </button>
                            </h3>
                            <div id="flushDo6" class="accordion-collapse collapse" aria-labelledby="flushProcess6" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Many moving companies offer packing services as an add-on. Movers can pack your belongings efficiently and securely, using appropriate packing materials.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess7">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo7" aria-expanded="false" aria-controls="flushDo7">
                                    Can I pack my own belongings?
                                </button>
                            </h3>
                            <div id="flushDo7" class="accordion-collapse collapse" aria-labelledby="flushProcess7" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Yes, you can pack your own belongings. This is referred to as a “self-packing” option. However, keep in mind that if you pack your items yourself, the moving company’s liability for any damages might be limited.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess8">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo8" aria-expanded="false" aria-controls="flushDo8">
                                    How can I protect my belongings during the move?
                                </button>
                            </h3>
                            <div id="flushDo8" class="accordion-collapse collapse" aria-labelledby="flushProcess8" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Proper packing, using quality packing materials, and labeling boxes clearly can help protect your belongings. You might also want to consider purchasing moving insurance to cover potential damages during transit.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess9">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo9" aria-expanded="false" aria-controls="flushDo9">
                                    What is moving insurance?
                                </button>
                            </h3>
                            <div id="flushDo9" class="accordion-collapse collapse" aria-labelledby="flushProcess9" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Moving insurance provides coverage for your belongings in case they are damaged, lost, or stolen during the moving process. There are different types of moving insurance, including basic coverage provided by the moving company and additional insurance you can purchase.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess10">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo10" aria-expanded="false" aria-controls="flushDo10">
                                    How should I prepare for moving day?
                                </button>
                            </h3>
                            <div id="flushDo10" class="accordion-collapse collapse" aria-labelledby="flushProcess10" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Research different moving companies by reading reviews, checking their licensing and insurance, and obtaining quotes from multiple sources. Look for companies with a history of positive customer experiences and transparent pricing.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess11">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo11" aria-expanded="false" aria-controls="flushDo11">
                                    What should I keep with me on moving day?
                                </button>
                            </h3>
                            <div id="flushDo11" class="accordion-collapse collapse" aria-labelledby="flushProcess11" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Keep important documents, medications, valuables, and essential items (toiletries, a change of clothes, etc.) with you rather than packing them with the rest of your belongings.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess12">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo12" aria-expanded="false" aria-controls="flushDo12">
                                    Can I take my pet with me?
                                </button>
                            </h3>
                            <div id="flushDo12" class="accordion-collapse collapse" aria-labelledby="flushProcess12" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Yes. Within Malaysia, Florette’s employs specialist partners to assist with pet transportation. Internationally, as with vehicles, the regulations vary greatly from country to country and the importation of pets or animals is carefully monitored at destination. Make sure you are aware of the rules before committing to transport your pet. Also be aware of requirements for inoculations and quarantine.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess13">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo13" aria-expanded="false" aria-controls="flushDo13">
                                    How much time does it take to move condominium to condominium locally?
                                </button>
                            </h3>
                            <div id="flushDo13" class="accordion-collapse collapse" aria-labelledby="flushProcess13" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Normally it takes 2 days.
                                    </p> 
                                    <p class="lead-sm">
                                        Note: – The Surveyor will reconfirm upon the survey
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess14">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo14" aria-expanded="false" aria-controls="flushDo14">
                                    How ofter you are having shipment to India
                                </button>
                            </h3>
                            <div id="flushDo14" class="accordion-collapse collapse" aria-labelledby="flushProcess14" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Frequency of shipment varies in each month, varies from 3-8 shipments per month.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess15">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo15" aria-expanded="false" aria-controls="flushDo15">
                                    Are you charging for Premove survey?
                                </button>
                            </h3>
                            <div id="flushDo15" class="accordion-collapse collapse" aria-labelledby="flushProcess15" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        No. Premove survey is free service.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess16">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo16" aria-expanded="false" aria-controls="flushDo16">
                                    What are the payment terms?
                                </button>
                            </h3>
                            <div id="flushDo16" class="accordion-collapse collapse" aria-labelledby="flushProcess16" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        For Local House Move – 50% advance and 50% after work completion
                                    </p> 
                                    <p class="lead-sm">
                                        For International Move – 100 % advance
                                    </p> 
                                </div>
                            </div>
                        </div> 

                        <p class="lead-lg text-25 fw-semibold py-5 my-lg-4">
                            Remember that specific details might vary depending on the moving company, location, and personal preferences. It’s always a good idea to communicate directly with your chosen moving company to clarify any questions you have about the moving process.
                        </p>


                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess17">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo17" aria-expanded="false" aria-controls="flushDo17">
                                    What is LCL in moving and shipping?
                                </button>
                            </h3>
                            <div id="flushDo17" class="accordion-collapse collapse show" aria-labelledby="flushProcess17" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        LCL stands for Less than Container Load. It is a term used in the shipping industry to describe a shipment that does not fill a full container. When a cargo is not large enough to occupy an entire shipping container, it is consolidated with other shipments to maximize container space and reduce costs. LCL shipments are combined with other cargo from different shippers into a single container at a container freight station. This allows multiple shippers to share the transportation costs of the container, making it a cost-effective option for smaller shipments. LCL shipments are commonly used for smaller businesses or individuals who do not require a full container for their goods.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess18">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo18" aria-expanded="false" aria-controls="flushDo18">
                                    What are the ways of moving personal effects overseas?
                                </button>
                            </h3>
                            <div id="flushDo18" class="accordion-collapse collapse" aria-labelledby="flushProcess18" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <ul class="lead-sm">
                                        <li class="mb-3">-Air Freight: Fastest option for urgent shipments.</li>
                                        <li class="mb-3">-Sea Freight: Cost-effective for larger shipments and longer distances.</li>
                                        <li class="mb-3">-Road Freight: Suitable for domestic or regional moves.</li>
                                        <li class="mb-3">-Rail Freight: Reliable option for intercontinental transportation.</li>
                                        <li class="mb-3">-Courier Services: Door-to-door shipping for smaller shipments.</li>
                                    </ul> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess19">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo19" aria-expanded="false" aria-controls="flushDo19">
                                    Is Sea shipment cheaper than air?
                                </button>
                            </h3>
                            <div id="flushDo19" class="accordion-collapse collapse" aria-labelledby="flushProcess19" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        Sea shipment is generally cheaper than air shipment for transporting goods over long distances. Shipping by sea allows for larger volumes of cargo to be transported at a lower cost per unit. However, it is important to consider that sea shipment takes more time compared to air shipment. Air shipment is faster but can be significantly more expensive, especially for larger or heavier items. The choice between sea shipment and air shipment depends on factors such as the urgency of delivery, budget constraints, and the nature of the goods being shipped.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess20">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo20" aria-expanded="false" aria-controls="flushDo20">
                                    What is the percentage of duty on TV when moving back to India?
                                </button>
                            </h3>
                            <div id="flushDo20" class="accordion-collapse collapse" aria-labelledby="flushProcess20" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <p class="lead-sm">
                                        In India, the import of TVs is subject to customs duties, which are imposed by the Indian government. The applicable duty rates can vary depending on factors such as the type of TV, its value, and the country of origin. Additionally, Goods and Services Tax (GST) may also be levied on the imported TV.  In total duty is 38.5% on the depreciated value of TV . Please check with your moving consultant for more info.
                                    </p> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess21">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo21" aria-expanded="false" aria-controls="flushDo21">
                                    How do we pack wine glasses while moving internationally?
                                </button>
                            </h3>
                            <div id="flushDo21" class="accordion-collapse collapse" aria-labelledby="flushProcess21" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <ul class="lead-sm">
                                        <li class="mb-3">-Gather supplies: Boxes, packing paper, bubble wrap, packing tape, marker.</li>
                                        <li class="mb-3">-Prepare box: Reinforce bottom with tape.</li>
                                        <li class="mb-3">-Cushion bottom: Place crumpled packing paper or bubble wrap.</li>
                                        <li class="mb-3">-Wrap each glass: Wrap tightly with paper or bubble wrap, secure with tape.</li>
                                        <li class="mb-3">-Arrange in a box: Pack vertically with cushioning in between.</li>
                                        <li class="mb-3">-Fill empty spaces: Add packing material to prevent movement.</li>
                                        <li class="mb-3">-Seal and label: Tape box securely, label as “Fragile” or “Handle with Care”.</li>
                                    </ul> 
                                </div>
                            </div>
                        </div> 
                        <div class="accordion-item ">
                            <h3 class="accordion-header" id="flushProcess22">
                                <button class="accordion-button lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushDo22" aria-expanded="false" aria-controls="flushDo22">
                                    What are the things to be taken care of before an international relocation?
                                </button>
                            </h3>
                            <div id="flushDo22" class="accordion-collapse collapse" aria-labelledby="flushProcess22" data-bs-parent="#accordionFaq1">
                                <div class="accordion-body">
                                    <ul class="lead-sm">
                                        <li class="mb-3">-Declutter and organize.</li>
                                        <li class="mb-3">-Create a moving checklist.</li>
                                        <li class="mb-3">-Change your address.</li>
                                        <li class="mb-3">-Transfer or disconnect utilities.</li>
                                        <li class="mb-3">-Notify service providers.</li>
                                        <li class="mb-3">-Pack an essentials box.</li>
                                        <li class="mb-3">-Inform friends and family.</li>
                                        <li class="mb-3">-Hire movers or arrange transportation.</li>
                                        <li class="mb-3">-Pack and label boxes.</li>
                                        <li class="mb-3">-Handle legal and financial matters.</li>
                                    </ul> 
                                </div>
                            </div>
                        </div> 

                    </div><!--.//accordion-->  
                </div><!--.//faq__wrapper-->

            </div><!--.//container-->
        </section>  
        <!-- FAQ’S section End -->

        

                 
    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
