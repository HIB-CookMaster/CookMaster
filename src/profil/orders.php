<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Order #</th>
                        <th scope="col">Product</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="opacity-75">
                        <th scope="row">1</th>
                        <td>Cheese Burger</td>
                        <td>Pending</td>
                        <td>9.99€</td>
                        <td class="pointer text-success" onclick="generatePDF()">PDF</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<br><br><br><br><br>

<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>

<script>
    function generatePDF(){
        var pdfObject = jsPDFInvoiceTemplate.default(props); //returns number of pages created
        console.log("Object Created", pdfObject);
    }

    var props = {
        outputType: jsPDFInvoiceTemplate.OutputType.Save,
        returnJsPDFDocObject: true,
        fileName: "Invoice 2021",
        orientationLandscape: false,
        compress: true,
        logo: {
            src: "/CookMaster/assets/images/logoPng.png",
            type: 'PNG', //optional, when src= data:uri (nodejs case)
            width: 30, //aspect ratio = width/height
            height: 5,
            margin: {
                top: 0, //negative or positive num, from the current position
                left: 0 //negative or positive num, from the current position
            }
        },
        stamp: {
            inAllPages: true, //by default = false, just in the last page
            src: "https://raw.githubusercontent.com/edisonneza/jspdf-invoice-template/demo/images/qr_code.jpg",
            type: 'JPG', //optional, when src= data:uri (nodejs case)
            width: 20, //aspect ratio = width/height
            height: 20,
            margin: {
                top: 0, //negative or positive num, from the current position
                left: 0 //negative or positive num, from the current position
            }
        },
        business: {
            name: "Foodieland",
            address: "Versailles, France",
            phone: "+33 123-456-789",
            email: "foodieland@gmail.com",
            email_1: "info@foodieland.com",
            website: "www://https://foodieland.com",
        },
        contact: {
            label: "Invoice issued for:",
            name: "Jean Baptsite",
            address: "24 rue des loires, 75001 Paris, France",
            phone: "07 35 21 41 57",
            email: "j.Baptiste@gmail.com",
        },
        invoice: {
            label: "Invoice #: ",
            num: 1,
            invDate: "Payment Date: 21/06/2023 18:12",
            invGenDate: "Invoice Date: 22/06/2023 10:17",
            headerBorder: false,
            tableBodyBorder: false,
            header: [{
                    title: "Id",
                    style: {
                        width: 10
                    }
                },
                {
                    title: "Product Name",
                    style: {
                        width: 30
                    }
                },
                {
                    title: "Description",
                    style: {
                        width: 80
                    }
                },
                {
                    title: "Price"
                },
                {
                    title: "Quantity"
                },
                {
                    title: "Total"
                }
            ],
            table: Array.from(Array(1), (item, index) => ([
                index + 1,
                "There are many variations ",
                "Lorem Ipsum is simply dummy text dummy text ",
                9.99,
                1,
                9.99
            ])),
            additionalRows: [{
                    col1: 'Total:',
                    col2: '145,250.50',
                    col3: 'ALL',
                    style: {
                        fontSize: 14 //optional, default 12
                    }
                },
                {
                    col1: 'VAT:',
                    col2: '20',
                    col3: '%',
                    style: {
                        fontSize: 10 //optional, default 12
                    }
                },
                {
                    col1: 'SubTotal:',
                    col2: '116,199.90',
                    col3: 'ALL',
                    style: {
                        fontSize: 10 //optional, default 12
                    }
                }
            ],
            invDescLabel: "Invoice Note",
            invDesc: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.",
        },
        footer: {
            text: "The invoice is created on a computer and is valid without the signature and stamp.",
        },
        pageEnable: true,
        pageLabel: "Page ",
    };
</script>
<?php require_once "../required_pages/footer.php" ?>