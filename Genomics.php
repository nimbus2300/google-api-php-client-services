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
 * Service definition for Genomics (v1).
 *
 * <p>
 * Stores, processes, explores and shares genomic data. This API implements the
 * Global Alliance for Genomics and Health (GA4GH) v0.5.1 API as well as several
 * extensions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Genomics extends Google_Service
{
  /** View and manage your data in Google BigQuery. */
  const BIGQUERY =
      "https://www.googleapis.com/auth/bigquery";
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE =
      "https://www.googleapis.com/auth/devstorage.read_write";
  /** View and manage Genomics data. */
  const GENOMICS =
      "https://www.googleapis.com/auth/genomics";
  /** View Genomics data. */
  const GENOMICS_READONLY =
      "https://www.googleapis.com/auth/genomics.readonly";

  public $callsets;
  public $datasets;
  public $operations;
  public $readgroupsets;
  public $readgroupsets_coveragebuckets;
  public $reads;
  public $references;
  public $references_bases;
  public $referencesets;
  public $variants;
  public $variantsets;
  
  /**
   * Constructs the internal representation of the Genomics service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://genomics.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'genomics';

    $this->callsets = new Google_Service_Genomics_CallsetsResource(
        $this,
        $this->serviceName,
        'callsets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/callsets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/callsets/{callSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'callSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/callsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->datasets = new Google_Service_Genomics_DatasetsResource(
        $this,
        $this->serviceName,
        'datasets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/datasets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getIamPolicy' => array(
              'path' => 'v1/{+resource}:getIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/datasets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/datasets/{datasetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'setIamPolicy' => array(
              'path' => 'v1/{+resource}:setIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'testIamPermissions' => array(
              'path' => 'v1/{+resource}:testIamPermissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'undelete' => array(
              'path' => 'v1/datasets/{datasetId}:undelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->operations = new Google_Service_Genomics_OperationsResource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'v1/{+name}:cancel',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->readgroupsets = new Google_Service_Genomics_ReadgroupsetsResource(
        $this,
        $this->serviceName,
        'readgroupsets',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'export' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}:export',
              'httpMethod' => 'POST',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'import' => array(
              'path' => 'v1/readgroupsets:import',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/readgroupsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->readgroupsets_coveragebuckets = new Google_Service_Genomics_ReadgroupsetsCoveragebucketsResource(
        $this,
        $this->serviceName,
        'coveragebuckets',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1/readgroupsets/{readGroupSetId}/coveragebuckets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'readGroupSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'referenceName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'end' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'targetBucketWidth' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->reads = new Google_Service_Genomics_ReadsResource(
        $this,
        $this->serviceName,
        'reads',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'v1/reads/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'stream' => array(
              'path' => 'v1/reads:stream',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->references = new Google_Service_Genomics_ReferencesResource(
        $this,
        $this->serviceName,
        'references',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1/references/{referenceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v1/references/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->references_bases = new Google_Service_Genomics_ReferencesBasesResource(
        $this,
        $this->serviceName,
        'bases',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1/references/{referenceId}/bases',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'start' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'end' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->referencesets = new Google_Service_Genomics_ReferencesetsResource(
        $this,
        $this->serviceName,
        'referencesets',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1/referencesets/{referenceSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v1/referencesets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->variants = new Google_Service_Genomics_VariantsResource(
        $this,
        $this->serviceName,
        'variants',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/variants',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'import' => array(
              'path' => 'v1/variants:import',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'merge' => array(
              'path' => 'v1/variants:merge',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'v1/variants/{variantId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'variantId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/variants/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'stream' => array(
              'path' => 'v1/variants:stream',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->variantsets = new Google_Service_Genomics_VariantsetsResource(
        $this,
        $this->serviceName,
        'variantsets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/variantsets',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'export' => array(
              'path' => 'v1/variantsets/{variantSetId}:export',
              'httpMethod' => 'POST',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/variantsets/{variantSetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'variantSetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'search' => array(
              'path' => 'v1/variantsets/search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
