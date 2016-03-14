<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "manifests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_DeploymentManager(...);
 *   $manifests = $deploymentmanagerService->manifests;
 *  </code>
 */
class Google_Service_DeploymentManager_ManifestsResource extends Google_Service_Resource
{
  /**
   * Gets information about a specific manifest. (manifests.get)
   *
   * @param string $project The project ID for this request.
   * @param string $deployment The name of the deployment for this request.
   * @param string $manifest The name of the manifest for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Manifest
   */
  public function get($project, $deployment, $manifest, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment, 'manifest' => $manifest);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google_Service_Manifest');
  }
  /**
   * Lists all manifests for a given deployment. (manifests.listManifests)
   *
   * @param string $project The project ID for this request.
   * @param string $deployment The name of the deployment for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Sets a filter expression for filtering listed
   * resources, in the form filter={expression}. Your {expression} must be in the
   * format: field_name comparison_string literal_string.
   *
   * The field_name is the name of the field you want to compare. Only atomic
   * field types are supported (string, number, boolean). The comparison_string
   * must be either eq (equals) or ne (not equals). The literal_string is the
   * string value to filter to. The literal value must be valid for the type of
   * field you are filtering by (string, number, boolean). For string fields, the
   * literal value is interpreted as a regular expression using RE2 syntax. The
   * literal value must match the entire field.
   *
   * For example, to filter for instances that do not have a name of example-
   * instance, you would use filter=name ne example-instance.
   *
   * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
   * also filter on nested fields. For example, you could filter on instances that
   * have set the scheduling.automaticRestart field to true. In particular, use
   * filtering on nested fields to take advantage of instance labels to organize
   * and filter results based on label values.
   *
   * The Beta API also supports filtering on multiple expressions by providing
   * each separate expression within parentheses. For example,
   * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
   * expressions are treated as AND expressions, meaning that resources must match
   * all expressions to pass the filters.
   * @opt_param string maxResults The maximum number of results per page that
   * should be returned. If the number of available results is larger than
   * maxResults, Compute Engine returns a nextPageToken that can be used to get
   * the next page of results in subsequent list requests.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_ManifestsListResponse
   */
  public function listManifests($project, $deployment, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google_Service_ManifestsListResponse');
  }
}
