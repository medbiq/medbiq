# Expectation

| \_ | \_ | Data Types | Notes/Description |
| :--- | :--- | :--- | :--- |
| **Description** | Provides data on curriculum expectations meeting certain parameters. |  |  |
| **Path** | /api/v1/expectation |  |  |
| **Methods** | GET, POST, PUT DELETE |  |  |
| **Parameters** | TBD |  |  |
|  | _We can break these into path parameters \(ie give me data on expectations for the sequence block with _`id 2345`_\) and query parameters \(ie give me data on expectations for all sequence blocks with a particular keyword\)_ |  |  |
|  | _Potential Path Parameters:_ |  |  |
|  | ProgramID | String | A unique ID for the educational program to query |
|  | AcademicLevel | String | A unique ID for the Academic level to query |
|  | SequenceBlock | String | A unique id for the Sequence Block to query |
|  | Event | String | A unique id for the Event to query |
|  | Previous version \(Replaces\) | String | A unique id for an Expectation that supplanted, displaced, or superceded the expectation queried |
|  | Later version \(IsReplacedBy\) | String | A unique ID for an Expectation that supplants, displaces, or supercedes the expectation queried |
|  |  |  |  |
|  | _Potential query parameters_: |  |  |
|  | SequenceBlock | String |  |
|  | Event | String |  |
|  | Instruction \(presence of instructional methods\) | Boolean |  |
|  | assessment \(presence of assessment methods\) | Boolean |  |
|  | InstructionalMethod | String |  |
|  | AssessmentMethod | String |  |
|  | parent expectation | URI |  |
|  | child expectation | URI |  |
| **Data Returned** | ID | URI | Identifier for the Expectation |
|  | Title | String | Title of the Expectation |
|  | `Category (ask wg email)` | String | Category of the Expectation |
|  | Sequence block | String | Identifier of a Sequence block referencing this Expectation |
|  | Academic level | String | Identifier of an Academic level referencing this expectation |
|  | Event | String | Identifier of an Event referencing this Expectation |
|  | Keyword | String | A keyword associated with this expectation |
|  | Related Competency Object | URI | URI of a related Competency Object |
|  | Parent competency objects \(should this be Broader for consistency?\) | URI | URI of a Competency Object defined as broader than the Expectation queried |
|  | Child competency objects \(should this be Narrower for consistency?\) | URI | URI of a Competency Object defined as narrower than the Expectation queried |
|  | Previous version \(Replaces\) | URI | URI of an Expectation supplanted, displaced, or superceneded by the Expectation queried |
|  | Later versions \(of the competency object – IsReplacedBy\) | URI | URI of an Expectation that supplants, displaces, or supercedes the Expectation queried |



