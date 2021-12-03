<p>Hi, 
    Thank You For Your order,
    We Will Contact you Shortly
</p>
<h5 class="title">Order Details</h5>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalQuantity =0;
                $total = 0;
            @endphp
            @foreach($data as $item)
                @php
                    $totalQuantity +=$item["Quantity"];
                    $total +=$item["Quantity"]*$item["ActualRate"];
                @endphp
               <tr>
                    <td>{{$item["ProductName"]}}</td>
                    <td>Rs.&nbsp;{{$item["ActualRate"]}}</td>
                    <td>{{$item["Quantity"]}}</td>
                    <td class="text-right">Rs.&nbsp;{{$item["Quantity"]*$item["ActualRate"]}}</td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td colspan="3"><strong>Total</strong></td>
                <td><strong>{{$totalQuantity}}</strong></td>
                <td class="text-right"><strong>Rs.&nbsp;{{$total}}</strong></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4"><strong>Delivery Charge</strong></td>
                <td class="text-right">
                    <strong>
                        100
                    </strong>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4"><strong>Grand Total</strong></td>
                <td class="text-right"><strong>Rs.&nbsp;{{$total+100}}</strong></td>
            </tr>
        </tbody>
    </table>
</div>
<ul>
    <li><i class="far fa-clock"></i> <span>24 hrs Service</span></li>
    <li><i class="fas fa-map-marker-alt"></i> <span>Dhobighat, Lalitpur, Nepal</span></li>
    <li><i class="fas fa-phone-alt" aria-hidden="true"></i> <a href="">+977 9847379890, +977 9801079890</a></li>
    <!-- <li><i class="fas fa-fax"></i><span>+1.888.292.7172</span></li> -->
    <li><i class="far fa-envelope"></i> <a href="">info@laatokoshero.com</a></li>
</ul>