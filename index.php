<!DOCTYPE html>
<html>

<head>
    <title>Daily Time Record</title>
    <style>
        @page {
            size: A4 portrait;
            /* Set the page size to A4 in portrait orientation */
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .column {
            width: 3.5in;
            /* Set the fixed width to 3.35 inches */
            border: 1px solid #000;
            padding: 0.1in;
            margin-right: 20px;
            /* Add a margin between columns */
        }

        p {
            margin: 0pt 0pt 8pt 0pt;
            font-size: 8pt;
            font-style: italic;
        }

        h3 {
            text-align: center;
            margin: 1pt;
        }

        h4 {
            margin: 20pt 0 0 0;
        }

        table {
            width: 3.5in;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            /* padding: 10px; */
            text-align: left;
            font-size: 10pt;
        }

        #monthly-info td {
            border: 0;
            font-size: 10pt;
            font-style: italic;
        }

        #monthly-info .input {
            border-bottom: 1px solid #000;
        }

        #dtr-table {
            border: 3px solid #000;
        }

        #dtr-table td,
        th {
            text-align: center;
        }

        /* #dtr-table tr td {
            border: 0px 3px solid #000;
        } */

        .time-td {
            width: 15%;
        }

        .time-input {
            border-left: 3px solid #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="column">
            <p>Civil Service Form No. 48</p>
            <h3>DAILY TIME RECORD</h3>
            <p style="text-align: center;">-----o0o-----</p>
            <!-- Employee Name -->
            <h4 style="text-align: center; text-decoration: underline;">CARL JONAR N. PALADO</h4>
            <p style="text-align: center; font-size: 10pt; font-style: normal;">(Name)</p>
            <!-- Month Information -->
            <table id="monthly-info" style="margin: 12pt 0px;">
                <!-- Month and year -->
                <tr>
                    <td style="width: 40%; text-align: center;">For the month of </td>
                    <td class="input" colspan="2">MAY 2023</td>
                </tr>
                <!-- Official Hours -->
                <tr>
                    <td rowspan="2" style="text-align: center;">Official hours for arrival and departure</td>
                    <td style="width: 25%">Regular days</td>
                    <td class="input">N</td>
                </tr>
                <tr>
                    <td>Saturdays</td>
                    <td class="input">N2</td>
                </tr>
            </table>
            <!-- DTR Table -->
            <table id="dtr-table" style="margin: 12pt 0px;">
                <!-- Header -->
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="2" class=" time-input">A.M</th>
                    <th colspan="2" class=" time-input">P.M</th>
                    <th colspan="2" class=" time-input">Undertime</th>
                </tr>
                <tr style="border: 3px solid #000;">
                    <th class="time-td time-input">Arrival</th>
                    <th class="time-td">Depar- ture</th>
                    <th class="time-td time-input">Arrival</th>
                    <th class="time-td">Depar- ture</th>
                    <th class="time-input">Hours</th>
                    <th>Minutes</th>
                </tr>
                <!-- Data for employee copy -->
                <?php for ($i = 1; $i <= 31; $i++) {
                    ?>
                    <tr>
                        <td style="font-weight: bold;">
                            <?= $i ?>
                        </td>
                        <td class="time-input">08:00</td>
                        <td>12:00</td>
                        <td class="time-input">01:00</td>
                        <td>05:00</td>
                        <td class="time-input">1</td>
                        <td>30</td>
                    </tr>
                <?php } ?>
                <tr style="border-top: 3px solid #000;">
                    <td colspan="5" style="text-align: right;">Total</td>
                    <td class="time-input"></td>
                    <td></td>
                </tr>
            </table>
            <!-- Oath of affirmation -->
            <p>I certify on my honor that the above is a true and correct report of the hours of work performed, record
                of which was made daily at the time of arrival and departure from office.</p>
            <!-- Employee Name and Signature -->
            <h4 style="text-align: center; text-decoration: underline;">CARL JONAR N. PALADO</h4>
            <p style="text-align: center; font-size: 9pt;">Instructor</p>
            <!-- Verification -->
            <p>VERIFIED as to the prescribed office hours:</p>
            <!-- Incharge Officer Name -->
            <h4 style="text-align: center; text-decoration: underline;">SAMPLE B. BOSS</h4>
            <p style="text-align: center; font-size: 9pt;">In Charge</p>
        </div>
    </div>
</body>

</html>