
<h2>Reliam App</h2>

<h3>Iteration #1</h3>

<i>For this first iteration lets just focus 
on these three entities:</i>

<ul>
<li>Organization</li>
<li>Create, Read and Update Account</li>
<li>Create, Read and Update Instance</li>
<li>List in table, and Read individually.</li>
</ul>


<strong>Here are the most critical use cases:</strong>

<h4>Use Case #1:</h4>

<p>As a sys admin I should be able to create an organization 
and provide the AWS API keys for an account. Upon creation, 
the system would call a python script to collect data. </p>

<blockquote>This may be a long operation, so we would
 need some dummy progress bar animation</blockquote>


<h4>Use Case #2:</h4>
<p>As a support associate I should be able select an organization, 
and view all instances for all accounts of the selected organization. </p>


<p>The instances page would have a table 
containing the following fields : </p>

<ul>
	<li>[column_name] => [UI label]</li>
	<li>id   =>  label: Instance Id</li>
	<li>tags  =>  Tags       // Heads up. This will be JSON string</li>
	<li>_state  =>  State</li>
	<li>public_dns_name => Public DNS Name</li>
	<li>ip_address  =>  Public IP</li>             
	<li>private_dns_name  => Private DNS Name</li>
	<li>private_ip_address  => Private IP</li>
	<li>instance_type  =>  Instance Type</li>
	<li>region  =>  Region</li>
	<li>account_name ??? (this is low priority)</li>
</ul>


<h4>se Case #3:</h4>
<p>As a support associate I should able click a 
“Refresh Button” in Account pages. 
<p>Under the hood a python script will be called 
and take care of syncing data</p>

