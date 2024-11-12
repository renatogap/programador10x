<style>
    * {
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        margin: 0;
        padding: 0;
    }

    body {
        height: 100vh;
        width: 100vw;
        background-color: #000;
    }

    .container {
        color: #ccc;
    }

    section {
        width: 100%;
        margin: 0 auto;
        
    }

    .titulo {
        font-size: 30px;
        font-weight: 600;
    }


    /* SESSION 1 */
    .section1 {
        background-color: <?= $section1->background ?>;
    }

    .section1 .card-area {
        width: <?= $section1->size ?>;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
    }

    .section1 .card-area .card-item {
        flex: 2 1 auto;
    }

    .section1 > .card-area > .card-1 {
        width: <?= ($section1->qtdDivisoes == 1 ? '100%' : ($section1->qtdDivisoes == 2 ? '49%' : '32%')) ?>;        
        text-align: center;
    }

    .section1 .card-area .card-logo {
        text-align: center; 
    }

    /* pega somente a segunda div da seção */
    .section1 > .card-area > .card-2 { 
        width: <?= ($section1->qtdDivisoes == 2 ? '49%' : '33%') ?>;
        float: right;
    }


    /* SESSION 2 */

    .section2 {
        background-color: <?= $section2->background ?>;
    }

    .section2 .card-area-2 {
        width: <?= $section2->size ?>;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
    }

    .section2 > .card-area-2 > .card-2-item {
        flex: 1 2 auto;
    }

    .section2 > .card-area-2 > .card2-1 {
        width: 20px;
        text-align: center;
    }

    .section2 > .card-area-2 > .card2-2 {
        width: 20px;
        text-align: center;
    }

    .section2 > .card-area-2 > .card-1 { 
        float: none !important;
    }

    .section1 .card-area .card-2 img { 
        width: 90%;
        float: right;
    }

    .section2 > .card-area-2 > .card2-1 > img { 
        width: 50%;
    }

    .section2 > .card-area-2 > .card2-2 { 
        text-align: left;
    }

    .section2 .card-area-2 .card-2-item:nth-child(1) {
        width: 20% !important;
    }

    .section2 .card-area-2 .card-2-item:nth-child(2) {
        width: 60% !important;
    }
    

    .color {
        color: #9bd444;
    }

    /* Formulário de inscrição */
    input {
        width: 96%;
        margin-top: 5px;
        font-size: 14px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn-inscrever {
        background-color: #9bd444;
        margin-top: 5px;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #9bd444;
        cursor: pointer;
        color: white;
    }

    .btn-inscrever:hover {
        background-color: #78b41f;
        color: #333;
    }

    


    @media (max-width: 960px) {
        .section1 {
            width: 100% !important;
        }

        .section1 .card-area {
            width: 550px !important;
        }

        .section2 .card-area-2 {
            width: 90% !important;
        }

        .section1 .card-area .card-1 {
            display: block;
            width: 100% !important;
        }

        .section1 .card-area .card-1 {
            display: block;
            float: none;
            margin: 0 auto;
        }

        .section1 .card-area .card-2 {
            text-align: center;
            width: 100% !important;
            padding-top: 1em;
        }

        .section1 .card-area .card-2 img {
            width: 50% !important;
            margin: 0 auto;
            float: none;
        }

        .section2 .card-area-2 .card-2-item:nth-child(1) {
            width: 20% !important;
        }

        .section2 .card-area-2 .card-2-item:nth-child(2) {
            width: 60% !important;
        }

        .section2 .card-area-2 .card2-1 img { 
            width: 60% !important;
        }

        input {
            width: 96%;
        }

        .btn-inscrever {
            width: 100%;
        }
    }

    @media (max-width: 500px) {
        section {
            padding-left: 0.5em;
            padding-right: 0.5em;
        }

        .section2 .card-area-2 .card-2-item:nth-child(1) {
            display: none;
        }

        .section2 .card-area-2 .card-2-item:nth-child(2) {
            width: 98% !important;
        }
    }





    .mt-1 { margin-top: 1em; }
    .mt-2 { margin-top: 2em; }
    .mt-3 { margin-top: 3em; }
    .mt-4 { margin-top: 4em; }
    .mt-5 { margin-top: 5em; }
    .mb-1 { margin-bottom: 1em; }
    .mb-2 { margin-bottom: 2em; }
    .mb-3 { margin-bottom: 3em; }
    .mb-4 { margin-bottom: 4em; }
    .mb-5 { margin-bottom: 5em; }

    .pt-1 { padding-top: 1em; }
    .pt-2 { padding-top: 2em; }
    .pt-3 { padding-top: 3em; }
    .pt-4 { padding-top: 4em; }
    .pt-5 { padding-top: 5em; }
    .pb-1 { padding-bottom: 1em; }
    .pb-2 { padding-bottom: 2em; }
    .pb-3 { padding-bottom: 3em; }
    .pb-4 { padding-bottom: 4em; }
    .pb-5 { padding-bottom: 5em; }

</style>