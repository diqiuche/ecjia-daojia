<div class="ticket_box">
	<div class="ticket_box_header">
		<div class="store_logo"><img src="{$store.shop_logo}" /></div>
		<div class="store_name">{$store.merchants_name}</div>
		{if $contact_mobile}
		<div class="store_mobile">{$contact_mobile}</div>
		{/if}
		<div class="pay_status">{$data.payment}（{$data.pay_status}）</div>
	</div>
	<div class="ticket_content no_dashed">
		<div class="ticket-item">{t domain="printer"}订单编号：{/t}{$data.order_sn}</div>
		<div class="ticket-item">{t domain="printer"}流水编号：{/t}{$data.order_trade_no}</div>
		<div class="ticket-item">{t domain="printer"}下单时间：{/t}{$data.purchase_time}</div>
		<div class="ticket-item">{t domain="printer"}期望送达时间：{/t}{$data.expect_shipping_time}</div>
	</div>
	<div class="ticket_content no_dashed">
		<div class="title">  
		   <span class="line"></span>  
		   <span class="txt">{t domain="printer"}商品名{/t}</span>
		   <span class="line"></span>  
		</div>  
		<ul>
			<li>{t domain="printer"}商品{/t}</li>
			<li>{t domain="printer"}数量{/t}</li>
			<li>{t domain="printer"}单价{/t}</li>
		</ul>
		<!-- {foreach from=$data.goods_lists item=list} -->
		<p>{$list.goods_name}</p>
		<ul>
			<li>&nbsp;</li>
			<li>{$list.goods_number}</li>
			<li>{$list.goods_amount}</li>
		</ul>
		<!-- {/foreach} -->
		<span class="total">{t domain="printer"}总计：{/t}{$data.goods_subtotal}</span>
	</div>	
	<div class="ticket_content">
		<div class="title">  
		   <span class="line"></span>  
		   <span class="txt">{t domain="printer"}其他{/t}</span>
		   <span class="line"></span>  
		</div> 
		<div class="ticket-item">
			<div class="left-item">{t domain="printer"}积分抵扣：{/t}-{$data.integral_money}</div>
			<div class="right-item">{t domain="printer"}获得积分：{/t}{$data.integral_give}</div>
		</div>
		<div class="ticket-item">{t domain="printer"}积分余额：{/t}{$data.integral_balance}</div>
		<div class="ticket-item">{t domain="printer"}满减满折：{/t}-{$data.favourable_discount}</div>
		<div class="ticket-item">{t domain="printer"}红包折扣：{/t}-{$data.bonus_discount}</div>
	</div>	
	<div class="ticket_content">
		<div class="ticket-item">{t domain="printer"}配送费用：{/t}{$data.shipping_fee}</div>
		<div class="ticket-item">{t domain="printer"}应收金额：{/t}{$data.receivables}</div>
		<div class="ticket-item">{t domain="printer"}实收金额：{/t}{$data.order_amount}</div>
		<div class="ticket-item">{t domain="printer"}微信支付：{/t}{$data.order_amount}</div>
	</div>
	<div class="ticket_content no_dashed">
        {t domain="printer"}备注内容：{/t}{$data.order_remarks}
		<div class="ticket-item">{t domain="printer"}地址：{/t}{$data.consignee_address}</div>
		<div class="ticket-item">{t domain="printer"}姓名：{/t}{$data.consignee_name}</div>
		<div class="ticket-item">{t domain="printer"}手机号：{/t}{$data.consignee_mobile}</div>
		<div class="ticket-item qrcode"><img src="{$statics_url}images/qrcode.png" /></div>
	</div>	
	{if $info.tail_content}
	<div class="ticket_content dashed">
		{$info.tail_content}
	</div>	
	{/if}	
</div>