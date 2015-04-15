
Iteration #1:
-----------------------------------------

For this first iteration lets just focus on these three entities:

Organization
Create, Read and Update
Account
Create, Read and Update
Instance
List in table, and Read individually.

Here are the most critical use cases:

As a sys admin I should be able to create an organization and provide the AWS API keys for an account. Upon creation, the system would call a python script to collect data. (This may be a long operation, so we would need some dummy progress bar animation)
As a support associate I should be able select an organization, and view all instances for all accounts of the selected organization. 
The instances page would have a table containing the following fields. 
[column_name] => [UI label]
id   =>  label: Instance Id
tags  =>  Tags       // Heads up. This will be JSON string
_state  =>  State
public_dns_name => Public DNS Name
ip_address  =>  Public IP             
private_dns_name  => Private DNS Name
private_ip_address  => Private IP
instance_type  =>  Instance Type
region  =>  Region
account_name ??? (this is low priority)
As a support associate I should able click a “Refresh Button” in Account pages. (Under the hood a python script will be called and take care of syncing data)

