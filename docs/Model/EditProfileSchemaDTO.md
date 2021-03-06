# EditProfileSchemaDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edit_options** | [**\Swagger\Client\Model\EditProfileOptionsDTO**](EditProfileOptionsDTO.md) | Options | [optional] 
**profile_info** | [**\Swagger\Client\Model\ProfileAdditionalInfoDTO**](ProfileAdditionalInfoDTO.md) | Additional data | [optional] 
**mask_id** | **string** | Mask Identifier | [optional] 
**predefined_profile_id** | **int** | Predefined Profile Identifier | [optional] 
**options** | [**\Swagger\Client\Model\ProfileMaskOptionsDTO**](ProfileMaskOptionsDTO.md) | Options | [optional] 
**behaviour** | [**\Swagger\Client\Model\ProfileMaskBehaviourDTO**](ProfileMaskBehaviourDTO.md) | Behaviour | [optional] 
**mask_type** | **int** | Possible values:  0: Nothing  1: Barcode  2: Archiviazione | [optional] 
**id** | **int** | Identifier | [optional] 
**document** | [**\Swagger\Client\Model\FileDTO**](FileDTO.md) | File data | [optional] 
**fields** | [**\Swagger\Client\Model\FieldBaseDTO[]**](FieldBaseDTO.md) | Fields | [optional] 
**post_profilation_actions** | [**\Swagger\Client\Model\PostProfilationActionDTO[]**](PostProfilationActionDTO.md) | Post Profilation Actions | [optional] 
**constrain_role_behaviour** | **int** | Possible values:  0: None  1: ForceInsert  2: State | [optional] 
**attachments** | **string[]** | Attachments | [optional] 
**notes** | [**\Swagger\Client\Model\NoteDTO[]**](NoteDTO.md) | Notes | [optional] 
**pa_notes** | **string[]** | Public Amministration Notes | [optional] 
**authority_data** | [**\Swagger\Client\Model\AuthorityDataDTO**](AuthorityDataDTO.md) | Authority Data | [optional] 
**generate_pa_protocol** | **bool** | Defines if a protocol has been generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


