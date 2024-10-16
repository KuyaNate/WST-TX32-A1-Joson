<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <h1>Korean Air Information</h1>
    <p>Welcome to Korean Air.</p>
    
    <table>
        <tr>
            <th>Section</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><h2>Flight Schedule</h2></td>
            <td><p>Check our flight schedule to find the best flight for your journey.</p></td>
        </tr>
        <tr>
            <td><h2>Baggage Information</h2></td>
            <td><p>Learn about our baggage policies to ensure a smooth check-in process.</p></td>
        </tr>
        <tr>
            <td><h2>In-Flight Services</h2></td>
            <td><p>Enjoy our in-flight services, including meals, entertainment, and more.</p></td>
        </tr>
        <tr>
            <td><h2>Contact Us</h2></td>
            <td><p>If you have any questions, please contact our customer service team.</p></td>
        </tr>
    </table>

<?= $this->endSection('content') ?>