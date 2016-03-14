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
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variants = $genomicsService->variants;
 *  </code>
 */
class Google_Service_Genomics_VariantsResource extends Google_Service_Resource
{
  /**
   * Creates a new variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.create)
   *
   * @param Google_Variant $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Variant
   */
  public function create(Variant $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), 'Google_Service_Variant');
  }
  /**
   * Deletes a variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.delete)
   *
   * @param string $variantId The ID of the variant to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_GenomicsEmpty
   */
  public function delete($variantId, $optParams = array())
  {
    $params = array('variantId' => $variantId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google_Service_GenomicsEmpty');
  }
  /**
   * Gets a variant by ID. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * (variants.get)
   *
   * @param string $variantId The ID of the variant.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Variant
   */
  public function get($variantId, $optParams = array())
  {
    $params = array('variantId' => $variantId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google_Service_Variant');
  }
  /**
   * Creates variant data by asynchronously importing the provided information.
   * For the definitions of variant sets and other genomics resources, see
   * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
   * /fundamentals-of-google-genomics) The variants for import will be merged with
   * any existing variant that matches its reference sequence, start, end,
   * reference bases, and alternative bases. If no such variant exists, a new one
   * will be created. When variants are merged, the call information from the new
   * variant is added to the existing variant, and other fields (such as key/value
   * pairs) are discarded. In particular, this means for merged VCF variants that
   * have conflicting INFO fields, some data will be arbitrarily discarded. As a
   * special case, for single-sample VCF files, QUAL and FILTER fields will be
   * moved to the call level; these are sometimes interpreted in a call-specific
   * context. Imported VCF headers are appended to the metadata already in a
   * variant set. (variants.import)
   *
   * @param Google_ImportVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Operation
   */
  public function import(ImportVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), 'Google_Service_Operation');
  }
  /**
   * Merges the given variants with existing variants. For the definitions of
   * variants and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Each variant will be merged with an existing variant that matches its
   * reference sequence, start, end, reference bases, and alternative bases. If no
   * such variant exists, a new one will be created. When variants are merged, the
   * call information from the new variant is added to the existing variant, and
   * other fields (such as key/value pairs) are discarded. (variants.merge)
   *
   * @param Google_MergeVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GenomicsEmpty
   */
  public function merge(MergeVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('merge', array($params), 'Google_Service_GenomicsEmpty');
  }
  /**
   * Updates a variant. For the definitions of variants and other genomics
   * resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * This method supports patch semantics. Returns the modified variant without
   * its calls. (variants.patch)
   *
   * @param string $variantId The ID of the variant to be updated.
   * @param Google_Variant $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask An optional mask specifying which fields to
   * update. At this time, mutable fields are names and info. Acceptable values
   * are "names" and "info". If unspecified, all mutable fields will be updated.
   * @return Google_Service_Variant
   */
  public function patch($variantId, Variant $postBody, $optParams = array())
  {
    $params = array('variantId' => $variantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google_Service_Variant');
  }
  /**
   * Gets a list of variants matching the criteria. For the definitions of
   * variants and other genomics resources, see [Fundamentals of Google
   * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
   * Implements [GlobalAllianceApi.searchVariants](https://github.com/ga4gh/schema
   * s/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L126).
   * (variants.search)
   *
   * @param Google_SearchVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SearchVariantsResponse
   */
  public function search(SearchVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), 'Google_Service_SearchVariantsResponse');
  }
  /**
   * Returns a stream of all the variants matching the search request, ordered by
   * reference name, position, and ID. (variants.stream)
   *
   * @param Google_StreamVariantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreamVariantsResponse
   */
  public function stream(StreamVariantsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stream', array($params), 'Google_Service_StreamVariantsResponse');
  }
}
