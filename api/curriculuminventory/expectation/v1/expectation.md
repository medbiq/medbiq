# Expectation #


|Operation Name |Expectation |
|-------------- |----------- |
|Description |Provides data on curriculum expectations meeting certain parameters. |
|Path       | /api/v1/expectation |
| Parameters | TBD |
|| *We can break these into path parameters (ie give me data on expectations for the sequence block with `id 2345`) and query parameters (ie give me data on expectations for all sequence blocks with a particular keyword)*
||_Potential Path Parameters:_
|| ProgramID
|| AcademicLevel
|| SequenceBlock
|| Event
|| Previous version (Replaces)
|| Later version (IsReplacedBy)
||
|| _Potential&nbsp;query&nbsp;parameters_:
|| SequenceBlock
|| Event
|| Instruction (presence of instructional methods)
|| assessment (presence of assessment methods)
|| InstructionalMethod
|| AssessmentMethod
|| parent expectation
|| child expectation
| **Data Returned** | ID
|| Title
|| `Category (ask wg email)`
|| Sequence blocks
|| Academic levels
|| Events
|| Keyword
|| Related Competency Objects
|| Parent competency objects
|| Child competency objects
|| Previous version (Replaces)
|| Later versions (of the competency object – IsReplacedBy)
