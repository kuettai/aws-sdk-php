<?php
// This file was auto-generated from sdk-root/src/data/resourcegroupstaggingapi/2017-01-26/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Resource Groups Tagging API</fullname>', 'operations' => [ 'DescribeReportCreation' => '<p>Describes the status of the <code>StartReportCreation</code> operation. </p> <p>You can call this operation only from the organization\'s management account and from the us-east-1 Region.</p>', 'GetComplianceSummary' => '<p>Returns a table that shows counts of resources that are noncompliant with their tag policies.</p> <p>For more information on tag policies, see <a href="https://docs.aws.amazon.com/organizations/latest/userguide/orgs_manage_policies_tag-policies.html">Tag Policies</a> in the <i>Organizations User Guide.</i> </p> <p>You can call this operation only from the organization\'s management account and from the us-east-1 Region.</p> <p>This operation supports pagination, where the response can be sent in multiple pages. You should check the <code>PaginationToken</code> response parameter to determine if there are additional results available to return. Repeat the query, passing the <code>PaginationToken</code> response parameter value as an input to the next request until you recieve a <code>null</code> value. A null value for <code>PaginationToken</code> indicates that there are no more results waiting to be returned.</p>', 'GetResources' => '<p>Returns all the tagged or previously tagged resources that are located in the specified Amazon Web Services Region for the account.</p> <p>Depending on what information you want returned, you can also specify the following:</p> <ul> <li> <p> <i>Filters</i> that specify what tags and resource types you want returned. The response includes all tags that are associated with the requested resources.</p> </li> <li> <p>Information about compliance with the account\'s effective tag policy. For more information on tag policies, see <a href="https://docs.aws.amazon.com/organizations/latest/userguide/orgs_manage_policies_tag-policies.html">Tag Policies</a> in the <i>Organizations User Guide.</i> </p> </li> </ul> <p>This operation supports pagination, where the response can be sent in multiple pages. You should check the <code>PaginationToken</code> response parameter to determine if there are additional results available to return. Repeat the query, passing the <code>PaginationToken</code> response parameter value as an input to the next request until you recieve a <code>null</code> value. A null value for <code>PaginationToken</code> indicates that there are no more results waiting to be returned.</p>', 'GetTagKeys' => '<p>Returns all tag keys currently in use in the specified Amazon Web Services Region for the calling account.</p> <p>This operation supports pagination, where the response can be sent in multiple pages. You should check the <code>PaginationToken</code> response parameter to determine if there are additional results available to return. Repeat the query, passing the <code>PaginationToken</code> response parameter value as an input to the next request until you recieve a <code>null</code> value. A null value for <code>PaginationToken</code> indicates that there are no more results waiting to be returned.</p>', 'GetTagValues' => '<p>Returns all tag values for the specified key that are used in the specified Amazon Web Services Region for the calling account.</p> <p>This operation supports pagination, where the response can be sent in multiple pages. You should check the <code>PaginationToken</code> response parameter to determine if there are additional results available to return. Repeat the query, passing the <code>PaginationToken</code> response parameter value as an input to the next request until you recieve a <code>null</code> value. A null value for <code>PaginationToken</code> indicates that there are no more results waiting to be returned.</p>', 'StartReportCreation' => '<p>Generates a report that lists all tagged resources in the accounts across your organization and tells whether each resource is compliant with the effective tag policy. Compliance data is refreshed daily. The report is generated asynchronously.</p> <p>The generated report is saved to the following location:</p> <p> <code>s3://example-bucket/AwsTagPolicies/o-exampleorgid/YYYY-MM-ddTHH:mm:ssZ/report.csv</code> </p> <p>You can call this operation only from the organization\'s management account and from the us-east-1 Region.</p>', 'TagResources' => '<p>Applies one or more tags to the specified resources. Note the following:</p> <ul> <li> <p>Not all resources can have tags. For a list of services with resources that support tagging using this operation, see <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/supported-services.html">Services that support the Resource Groups Tagging API</a>. If the resource doesn\'t yet support this operation, the resource\'s service might support tagging using its own API operations. For more information, refer to the documentation for that service.</p> </li> <li> <p>Each resource can have up to 50 tags. For other limits, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws_tagging.html#tag-conventions">Tag Naming and Usage Conventions</a> in the <i>Amazon Web Services General Reference.</i> </p> </li> <li> <p>You can only tag resources that are located in the specified Amazon Web Services Region for the Amazon Web Services account.</p> </li> <li> <p>To add tags to a resource, you need the necessary permissions for the service that the resource belongs to as well as permissions for adding tags. For more information, see the documentation for each service.</p> </li> </ul> <important> <p>Do not store personally identifiable information (PII) or other confidential or sensitive information in tags. We use tags to provide you with billing and administration services. Tags are not intended to be used for private or sensitive data.</p> </important> <p> <b>Minimum permissions</b> </p> <p>In addition to the <code>tag:TagResources</code> permission required by this operation, you must also have the tagging permission defined by the service that created the resource. For example, to tag an Amazon EC2 instance using the <code>TagResources</code> operation, you must have both of the following permissions:</p> <ul> <li> <p> <code>tag:TagResource</code> </p> </li> <li> <p> <code>ec2:CreateTags</code> </p> </li> </ul>', 'UntagResources' => '<p>Removes the specified tags from the specified resources. When you specify a tag key, the action removes both that key and its associated value. The operation succeeds even if you attempt to remove tags from a resource that were already removed. Note the following:</p> <ul> <li> <p>To remove tags from a resource, you need the necessary permissions for the service that the resource belongs to as well as permissions for removing tags. For more information, see the documentation for the service whose resource you want to untag.</p> </li> <li> <p>You can only tag resources that are located in the specified Amazon Web Services Region for the calling Amazon Web Services account.</p> </li> </ul> <p> <b>Minimum permissions</b> </p> <p>In addition to the <code>tag:UntagResources</code> permission required by this operation, you must also have the remove tags permission defined by the service that created the resource. For example, to remove the tags from an Amazon EC2 instance using the <code>UntagResources</code> operation, you must have both of the following permissions:</p> <ul> <li> <p> <code>tag:UntagResource</code> </p> </li> <li> <p> <code>ec2:DeleteTags</code> </p> </li> </ul>', ], 'shapes' => [ 'AmazonResourceType' => [ 'base' => NULL, 'refs' => [ 'ResourceTypeFilterList$member' => NULL, 'Summary$ResourceType' => '<p>The Amazon Web Services resource type.</p>', ], ], 'ComplianceDetails' => [ 'base' => '<p>Information that shows whether a resource is compliant with the effective tag policy, including details on any noncompliant tag keys.</p>', 'refs' => [ 'ResourceTagMapping$ComplianceDetails' => '<p>Information that shows whether a resource is compliant with the effective tag policy, including details on any noncompliant tag keys.</p>', ], ], 'ComplianceStatus' => [ 'base' => NULL, 'refs' => [ 'ComplianceDetails$ComplianceStatus' => '<p>Whether a resource is compliant with the effective tag policy.</p>', ], ], 'ConcurrentModificationException' => [ 'base' => '<p>The target of the operation is currently being modified by a different request. Try again later.</p>', 'refs' => [], ], 'ConstraintViolationException' => [ 'base' => '<p>The request was denied because performing this operation violates a constraint. </p> <p>Some of the reasons in the following list might not apply to this specific operation.</p> <ul> <li> <p>You must meet the prerequisites for using tag policies. For information, see <a href="https://docs.aws.amazon.com/organizations/latest/userguide/orgs_manage_policies_tag-policies-prereqs.html">Prerequisites and Permissions for Using Tag Policies</a> in the <i>Organizations User Guide.</i> </p> </li> <li> <p>You must enable the tag policies service principal (<code>tagpolicies.tag.amazonaws.com</code>) to integrate with Organizations For information, see <a href="https://docs.aws.amazon.com/organizations/latest/APIReference/API_EnableAWSServiceAccess.html">EnableAWSServiceAccess</a>.</p> </li> <li> <p>You must have a tag policy attached to the organization root, an OU, or an account.</p> </li> </ul>', 'refs' => [], ], 'DescribeReportCreationInput' => [ 'base' => NULL, 'refs' => [], ], 'DescribeReportCreationOutput' => [ 'base' => NULL, 'refs' => [], ], 'ErrorCode' => [ 'base' => NULL, 'refs' => [ 'FailureInfo$ErrorCode' => '<p>The code of the common error. Valid values include <code>InternalServiceException</code>, <code>InvalidParameterException</code>, and any valid error code returned by the Amazon Web Services service that hosts the resource that you want to tag.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$ErrorMessage' => '<p>Details of the common errors that all operations return.</p>', 'FailureInfo$ErrorMessage' => '<p>The message of the common error.</p>', ], ], 'ExceptionMessage' => [ 'base' => NULL, 'refs' => [ 'ConcurrentModificationException$Message' => NULL, 'ConstraintViolationException$Message' => NULL, 'InternalServiceException$Message' => NULL, 'InvalidParameterException$Message' => NULL, 'PaginationTokenExpiredException$Message' => NULL, 'ThrottledException$Message' => NULL, ], ], 'ExcludeCompliantResources' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$ExcludeCompliantResources' => '<p>Specifies whether to exclude resources that are compliant with the tag policy. Set this to <code>true</code> if you are interested in retrieving information on noncompliant resources only.</p> <p>You can use this parameter only if the <code>IncludeComplianceDetails</code> parameter is also set to <code>true</code>.</p>', ], ], 'FailedResourcesMap' => [ 'base' => NULL, 'refs' => [ 'TagResourcesOutput$FailedResourcesMap' => '<p>A map containing a key-value pair for each failed item that couldn\'t be tagged. The key is the ARN of the failed resource. The value is a <code>FailureInfo</code> object that contains an error code, a status code, and an error message. If there are no errors, the <code>FailedResourcesMap</code> is empty.</p>', 'UntagResourcesOutput$FailedResourcesMap' => '<p>A map containing a key-value pair for each failed item that couldn\'t be untagged. The key is the ARN of the failed resource. The value is a <code>FailureInfo</code> object that contains an error code, a status code, and an error message. If there are no errors, the <code>FailedResourcesMap</code> is empty.</p>', ], ], 'FailureInfo' => [ 'base' => '<p>Information about the errors that are returned for each failed resource. This information can include <code>InternalServiceException</code> and <code>InvalidParameterException</code> errors. It can also include any valid error code returned by the Amazon Web Services service that hosts the resource that the ARN key represents.</p> <p>The following are common error codes that you might receive from other Amazon Web Services services:</p> <ul> <li> <p> <b>InternalServiceException</b> – This can mean that the Resource Groups Tagging API didn\'t receive a response from another Amazon Web Services service. It can also mean that the resource type in the request is not supported by the Resource Groups Tagging API. In these cases, it\'s safe to retry the request and then call <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/API_GetResources.html">GetResources</a> to verify the changes.</p> </li> <li> <p> <b>AccessDeniedException</b> – This can mean that you need permission to call the tagging operations in the Amazon Web Services service that contains the resource. For example, to use the Resource Groups Tagging API to tag a Amazon CloudWatch alarm resource, you need permission to call both <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/API_TagResources.html"> <code>TagResources</code> </a> <i>and</i> <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_TagResource.html"> <code>TagResource</code> </a> in the CloudWatch API. </p> </li> </ul> <p>For more information on errors that are generated from other Amazon Web Services services, see the documentation for that service. </p>', 'refs' => [ 'FailedResourcesMap$value' => NULL, ], ], 'GetComplianceSummaryInput' => [ 'base' => NULL, 'refs' => [], ], 'GetComplianceSummaryOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagKeysInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagKeysOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagValuesInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagValuesOutput' => [ 'base' => NULL, 'refs' => [], ], 'GroupBy' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$GroupBy' => '<p>Specifies a list of attributes to group the counts of noncompliant resources by. If supplied, the counts are sorted by those attributes.</p>', ], ], 'GroupByAttribute' => [ 'base' => NULL, 'refs' => [ 'GroupBy$member' => NULL, ], ], 'IncludeComplianceDetails' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$IncludeComplianceDetails' => '<p>Specifies whether to include details regarding the compliance with the effective tag policy. Set this to <code>true</code> to determine whether resources are compliant with the tag policy and to get details.</p>', ], ], 'InternalServiceException' => [ 'base' => '<p>The request processing failed because of an unknown error, exception, or failure. You can retry the request.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>This error indicates one of the following:</p> <ul> <li> <p>A parameter is missing.</p> </li> <li> <p>A malformed string was supplied for the request parameter.</p> </li> <li> <p>An out-of-range value was supplied for the request parameter.</p> </li> <li> <p>The target ID is invalid, unsupported, or doesn\'t exist.</p> </li> <li> <p>You can\'t access the Amazon S3 bucket for report storage. For more information, see <a href="https://docs.aws.amazon.com/organizations/latest/userguide/orgs_manage_policies_tag-policies-prereqs.html#bucket-policies-org-report">Additional Requirements for Organization-wide Tag Compliance Reports</a> in the <i>Organizations User Guide.</i> </p> </li> </ul>', 'refs' => [], ], 'LastUpdated' => [ 'base' => NULL, 'refs' => [ 'Summary$LastUpdated' => '<p>The timestamp that shows when this summary was generated in this Region. </p>', ], ], 'MaxResultsGetComplianceSummary' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$MaxResults' => '<p>Specifies the maximum number of results to be returned in each page. A query can return fewer than this maximum, even if there are more results still to return. You should always check the <code>PaginationToken</code> response value to see if there are more results. You can specify a minimum of 1 and a maximum value of 100.</p>', ], ], 'NonCompliantResources' => [ 'base' => NULL, 'refs' => [ 'Summary$NonCompliantResources' => '<p>The count of noncompliant resources.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$PaginationToken' => '<p>Specifies a <code>PaginationToken</code> response value from a previous request to indicate that you want the next page of results. Leave this parameter empty in your initial request.</p>', 'GetComplianceSummaryOutput$PaginationToken' => '<p>A string that indicates that there is more data available than this response contains. To receive the next part of the response, specify this response value as the <code>PaginationToken</code> value in the request for the next page.</p>', 'GetResourcesInput$PaginationToken' => '<p>Specifies a <code>PaginationToken</code> response value from a previous request to indicate that you want the next page of results. Leave this parameter empty in your initial request.</p>', 'GetResourcesOutput$PaginationToken' => '<p>A string that indicates that there is more data available than this response contains. To receive the next part of the response, specify this response value as the <code>PaginationToken</code> value in the request for the next page.</p>', 'GetTagKeysInput$PaginationToken' => '<p>Specifies a <code>PaginationToken</code> response value from a previous request to indicate that you want the next page of results. Leave this parameter empty in your initial request.</p>', 'GetTagKeysOutput$PaginationToken' => '<p>A string that indicates that there is more data available than this response contains. To receive the next part of the response, specify this response value as the <code>PaginationToken</code> value in the request for the next page.</p>', 'GetTagValuesInput$PaginationToken' => '<p>Specifies a <code>PaginationToken</code> response value from a previous request to indicate that you want the next page of results. Leave this parameter empty in your initial request.</p>', 'GetTagValuesOutput$PaginationToken' => '<p>A string that indicates that there is more data available than this response contains. To receive the next part of the response, specify this response value as the <code>PaginationToken</code> value in the request for the next page.</p>', ], ], 'PaginationTokenExpiredException' => [ 'base' => '<p>A <code>PaginationToken</code> is valid for a maximum of 15 minutes. Your request was denied because the specified <code>PaginationToken</code> has expired.</p>', 'refs' => [], ], 'Region' => [ 'base' => NULL, 'refs' => [ 'RegionFilterList$member' => NULL, 'Summary$Region' => '<p>The Amazon Web Services Region that the summary applies to.</p>', ], ], 'RegionFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$RegionFilters' => '<p>Specifies a list of Amazon Web Services Regions to limit the output to. If you use this parameter, the count of returned noncompliant resources includes only resources in the specified Regions.</p>', ], ], 'ResourceARN' => [ 'base' => NULL, 'refs' => [ 'FailedResourcesMap$key' => NULL, 'ResourceARNListForGet$member' => NULL, 'ResourceARNListForTagUntag$member' => NULL, 'ResourceTagMapping$ResourceARN' => '<p>The ARN of the resource.</p>', ], ], 'ResourceARNListForGet' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$ResourceARNList' => '<p>Specifies a list of ARNs of resources for which you want to retrieve tag data. You can\'t specify both this parameter and any of the pagination parameters (<code>ResourcesPerPage</code>, <code>TagsPerPage</code>, <code>PaginationToken</code>) in the same request. If you specify both, you get an <code>Invalid Parameter</code> exception.</p> <p>If a resource specified by this parameter doesn\'t exist, it doesn\'t generate an error; it simply isn\'t included in the response.</p> <p>An ARN (Amazon Resource Name) uniquely identifies a resource. For more information, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and Amazon Web Services Service Namespaces</a> in the <i>Amazon Web Services General Reference</i>.</p>', ], ], 'ResourceARNListForTagUntag' => [ 'base' => NULL, 'refs' => [ 'TagResourcesInput$ResourceARNList' => '<p>Specifies the list of ARNs of the resources that you want to apply tags to.</p> <p>An ARN (Amazon Resource Name) uniquely identifies a resource. For more information, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and Amazon Web Services Service Namespaces</a> in the <i>Amazon Web Services General Reference</i>.</p>', 'UntagResourcesInput$ResourceARNList' => '<p>Specifies a list of ARNs of the resources that you want to remove tags from.</p> <p>An ARN (Amazon Resource Name) uniquely identifies a resource. For more information, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and Amazon Web Services Service Namespaces</a> in the <i>Amazon Web Services General Reference</i>.</p>', ], ], 'ResourceTagMapping' => [ 'base' => '<p>A list of resource ARNs and the tags (keys and values) that are associated with each.</p>', 'refs' => [ 'ResourceTagMappingList$member' => NULL, ], ], 'ResourceTagMappingList' => [ 'base' => NULL, 'refs' => [ 'GetResourcesOutput$ResourceTagMappingList' => '<p>A list of resource ARNs and the tags (keys and values) associated with each.</p>', ], ], 'ResourceTypeFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$ResourceTypeFilters' => '<p>Specifies that you want the response to include information for only resources of the specified types. The format of each resource type is <code>service[:resourceType]</code>. For example, specifying a resource type of <code>ec2</code> returns all Amazon EC2 resources (which includes EC2 instances). Specifying a resource type of <code>ec2:instance</code> returns only EC2 instances.</p> <p>The string for each service name and resource type is the same as that embedded in a resource\'s Amazon Resource Name (ARN). Consult the <i> <a href="https://docs.aws.amazon.com/general/latest/gr/">Amazon Web Services General Reference</a> </i> for the following:</p> <ul> <li> <p>For a list of service name strings, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">Amazon Web Services Service Namespaces</a>.</p> </li> <li> <p>For resource type strings, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#arns-syntax">Example ARNs</a>.</p> </li> <li> <p>For more information about ARNs, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and Amazon Web Services Service Namespaces</a>.</p> </li> </ul> <p>You can specify multiple resource types by using a comma separated array. The array can include up to 100 items. Note that the length constraint requirement applies to each resource type filter. </p>', 'GetResourcesInput$ResourceTypeFilters' => '<p>Specifies the resource types that you want included in the response. The format of each resource type is <code>service[:resourceType]</code>. For example, specifying a resource type of <code>ec2</code> returns all Amazon EC2 resources (which includes EC2 instances). Specifying a resource type of <code>ec2:instance</code> returns only EC2 instances. </p> <p>The string for each service name and resource type is the same as that embedded in a resource\'s Amazon Resource Name (ARN). For the list of services whose resources you can use in this parameter, see <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/supported-services.html">Services that support the Resource Groups Tagging API</a>.</p> <p>You can specify multiple resource types by using an array. The array can include up to 100 items. Note that the length constraint requirement applies to each resource type filter. For example, the following string would limit the response to only Amazon EC2 instances, Amazon S3 buckets, or any Audit Manager resource:</p> <p> <code>ec2:instance,s3:bucket,auditmanager</code> </p>', ], ], 'ResourcesPerPage' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$ResourcesPerPage' => '<p>Specifies the maximum number of results to be returned in each page. A query can return fewer than this maximum, even if there are more results still to return. You should always check the <code>PaginationToken</code> response value to see if there are more results. You can specify a minimum of 1 and a maximum value of 100.</p>', ], ], 'S3Bucket' => [ 'base' => NULL, 'refs' => [ 'StartReportCreationInput$S3Bucket' => '<p>The name of the Amazon S3 bucket where the report will be stored; for example:</p> <p> <code>awsexamplebucket</code> </p> <p>For more information on S3 bucket requirements, including an example bucket policy, see the example S3 bucket policy on this page.</p>', ], ], 'S3Location' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$S3Location' => '<p>The path to the Amazon S3 bucket where the report was stored on creation.</p>', ], ], 'StartReportCreationInput' => [ 'base' => NULL, 'refs' => [], ], 'StartReportCreationOutput' => [ 'base' => NULL, 'refs' => [], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$Status' => '<p>Reports the status of the operation.</p> <p>The operation status can be one of the following:</p> <ul> <li> <p> <code>RUNNING</code> - Report creation is in progress.</p> </li> <li> <p> <code>SUCCEEDED</code> - Report creation is complete. You can open the report from the Amazon S3 bucket that you specified when you ran <code>StartReportCreation</code>.</p> </li> <li> <p> <code>FAILED</code> - Report creation timed out or the Amazon S3 bucket is not accessible. </p> </li> <li> <p> <code>NO REPORT</code> - No report was generated in the last 90 days.</p> </li> </ul>', ], ], 'StatusCode' => [ 'base' => NULL, 'refs' => [ 'FailureInfo$StatusCode' => '<p>The HTTP status code of the common error.</p>', ], ], 'Summary' => [ 'base' => '<p>A count of noncompliant resources.</p>', 'refs' => [ 'SummaryList$member' => NULL, ], ], 'SummaryList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryOutput$SummaryList' => '<p>A table that shows counts of noncompliant resources.</p>', ], ], 'Tag' => [ 'base' => '<p>The metadata that you apply to Amazon Web Services resources to help you categorize and organize them. Each tag consists of a key and a value, both of which you define. For more information, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws_tagging.html">Tagging Amazon Web Services Resources</a> in the <i>Amazon Web Services General Reference</i>.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagFilter' => [ 'base' => '<p>A list of tags (keys and values) that are used to specify the associated resources.</p>', 'refs' => [ 'TagFilterList$member' => NULL, ], ], 'TagFilterList' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$TagFilters' => '<p>Specifies a list of TagFilters (keys and values) to restrict the output to only those resources that have tags with the specified keys and, if included, the specified values. Each <code>TagFilter</code> must contain a key with values optional. A request can include up to 50 keys, and each key can include up to 20 values. </p> <p>Note the following when deciding how to use TagFilters:</p> <ul> <li> <p>If you <i>don\'t</i> specify a <code>TagFilter</code>, the response includes all resources that are currently tagged or ever had a tag. Resources that currently don\'t have tags are shown with an empty tag set, like this: <code>"Tags": []</code>.</p> </li> <li> <p>If you specify more than one filter in a single request, the response returns only those resources that satisfy all filters.</p> </li> <li> <p>If you specify a filter that contains more than one value for a key, the response returns resources that match <i>any</i> of the specified values for that key.</p> </li> <li> <p>If you don\'t specify a value for a key, the response returns all resources that are tagged with that key, with any or no value.</p> <p>For example, for the following filters: <code>filter1= {keyA,{value1}}</code>, <code>filter2={keyB,{value2,value3,value4}}</code>, <code>filter3= {keyC}</code>:</p> <ul> <li> <p> <code>GetResources({filter1})</code> returns resources tagged with <code>key1=value1</code> </p> </li> <li> <p> <code>GetResources({filter2})</code> returns resources tagged with <code>key2=value2</code> or <code>key2=value3</code> or <code>key2=value4</code> </p> </li> <li> <p> <code>GetResources({filter3})</code> returns resources tagged with any tag with the key <code>key3</code>, and with any or no value</p> </li> <li> <p> <code>GetResources({filter1,filter2,filter3})</code> returns resources tagged with <code>(key1=value1) and (key2=value2 or key2=value3 or key2=value4) and (key3, any or no value)</code> </p> </li> </ul> </li> </ul>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'GetTagValuesInput$Key' => '<p>Specifies the tag key for which you want to list all existing values that are currently used in the specified Amazon Web Services Region for the calling account.</p>', 'Tag$Key' => '<p>One part of a key-value pair that makes up a tag. A key is a general label that acts like a category for more specific tag values.</p>', 'TagFilter$Key' => '<p>One part of a key-value pair that makes up a tag. A key is a general label that acts like a category for more specific tag values.</p>', 'TagKeyFilterList$member' => NULL, 'TagKeyList$member' => NULL, 'TagKeyListForUntag$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$TagKeyFilters' => '<p>Specifies that you want the response to include information for only resources that have tags with the specified tag keys. If you use this parameter, the count of returned noncompliant resources includes only resources that have the specified tag keys.</p>', ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'ComplianceDetails$NoncompliantKeys' => '<p>These tag keys on the resource are noncompliant with the effective tag policy.</p>', 'ComplianceDetails$KeysWithNoncompliantValues' => '<p>These are keys defined in the effective policy that are on the resource with either incorrect case treatment or noncompliant values. </p>', 'GetTagKeysOutput$TagKeys' => '<p>A list of all tag keys in the Amazon Web Services account.</p>', ], ], 'TagKeyListForUntag' => [ 'base' => NULL, 'refs' => [ 'UntagResourcesInput$TagKeys' => '<p>Specifies a list of tag keys that you want to remove from the specified resources.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'ResourceTagMapping$Tags' => '<p>The tags that have been applied to one or more Amazon Web Services resources.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'TagResourcesInput$Tags' => '<p>Specifies a list of tags that you want to add to the specified resources. A tag consists of a key and a value that you define.</p>', ], ], 'TagResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'TagResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>One part of a key-value pair that make up a tag. A value acts as a descriptor within a tag category (key). The value can be empty or null.</p>', 'TagMap$value' => NULL, 'TagValueList$member' => NULL, 'TagValuesOutputList$member' => NULL, ], ], 'TagValueList' => [ 'base' => NULL, 'refs' => [ 'TagFilter$Values' => '<p>One part of a key-value pair that make up a tag. A value acts as a descriptor within a tag category (key). The value can be empty or null.</p>', ], ], 'TagValuesOutputList' => [ 'base' => NULL, 'refs' => [ 'GetTagValuesOutput$TagValues' => '<p>A list of all tag values for the specified key currently used in the specified Amazon Web Services Region for the calling account.</p>', ], ], 'TagsPerPage' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$TagsPerPage' => '<p>Amazon Web Services recommends using <code>ResourcesPerPage</code> instead of this parameter.</p> <p>A limit that restricts the number of tags (key and value pairs) returned by <code>GetResources</code> in paginated output. A resource with no tags is counted as having one tag (one key and value pair).</p> <p> <code>GetResources</code> does not split a resource and its associated tags across pages. If the specified <code>TagsPerPage</code> would cause such a break, a <code>PaginationToken</code> is returned in place of the affected resource and its tags. Use that token in another request to get the remaining data. For example, if you specify a <code>TagsPerPage</code> of <code>100</code> and the account has 22 resources with 10 tags each (meaning that each resource has 10 key and value pairs), the output will consist of three pages. The first page displays the first 10 resources, each with its 10 tags. The second page displays the next 10 resources, each with its 10 tags. The third page displays the remaining 2 resources, each with its 10 tags.</p> <p>You can set <code>TagsPerPage</code> to a minimum of 100 items up to a maximum of 500 items.</p>', ], ], 'TargetId' => [ 'base' => NULL, 'refs' => [ 'Summary$TargetId' => '<p>The account identifier or the root identifier of the organization. If you don\'t know the root ID, you can call the Organizations <a href="https://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API.</p>', 'TargetIdFilterList$member' => NULL, ], ], 'TargetIdFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$TargetIdFilters' => '<p>Specifies target identifiers (usually, specific account IDs) to limit the output by. If you use this parameter, the count of returned noncompliant resources includes only resources with the specified target IDs.</p>', ], ], 'TargetIdType' => [ 'base' => NULL, 'refs' => [ 'Summary$TargetIdType' => '<p>Whether the target is an account, an OU, or the organization root.</p>', ], ], 'ThrottledException' => [ 'base' => '<p>The request was denied to limit the frequency of submitted requests.</p>', 'refs' => [], ], 'UntagResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], ],];
