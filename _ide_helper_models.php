<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property string $id
 * @property string $question_id
 * @property string $label_ar
 * @property int $score_value
 * @property int $order_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Question|null $question
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserAnswer> $userAnswers
 * @property-read int|null $user_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereLabelAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereScoreValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerOption withoutTrashed()
 */
	class AnswerOption extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $title_ar
 * @property string $category
 * @property string|null $description_ar
 * @property string $scoring_type
 * @property int|null $time_limit_min
 * @property bool $is_active
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property numeric|null $price
 * @property numeric|null $rating
 * @property int $rating_count
 * @property string|null $image_url
 * @property string|null $subtitle_ar
 * @property bool $hide_coupon_field
 * @property string|null $icon
 * @property string|null $report_code
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Coupon> $coupons
 * @property-read int|null $coupons_count
 * @property-read \App\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Dimension> $dimensions
 * @property-read int|null $dimensions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamSession> $examSessions
 * @property-read int|null $exam_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Recommendation> $recommendations
 * @property-read int|null $recommendations_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereHideCouponField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereRatingCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereReportCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereScoringType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereSubtitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereTimeLimitMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assessment withoutTrashed()
 */
	class Assessment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property int|null $assessments_limit
 * @property \Illuminate\Support\Carbon|null $expires_at
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $code
 * @property int $discount_percentage
 * @property int|null $discount_percentage_2nd
 * @property int|null $discount_percentage_3rd
 * @property bool $applies_to_all_assessments
 * @property bool $applies_to_all_users
 * @property numeric|null $discount_percentage_4th
 * @property numeric|null $discount_percentage_5th
 * @property numeric|null $discount_percentage_6th
 * @property numeric|null $discount_percentage_7th
 * @property numeric|null $discount_percentage_8th
 * @property numeric|null $discount_percentage_9th
 * @property numeric|null $discount_percentage_10th
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Assessment> $assessments
 * @property-read int|null $assessments_count
 * @property-read string|null $display_code
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $permittedUsers
 * @property-read int|null $permitted_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereAppliesToAllAssessments($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereAppliesToAllUsers($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereAssessmentsLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage10th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage2nd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage3rd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage4th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage5th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage6th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage7th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage8th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereDiscountPercentage9th($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Coupon withoutTrashed()
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $assessment_id
 * @property string $name_ar
 * @property int $max_score
 * @property int $order_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Assessment|null $assessment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DimensionScore> $dimensionScores
 * @property-read int|null $dimension_scores_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DimensionInterpretation> $interpretations
 * @property-read int|null $interpretations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereAssessmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereMaxScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dimension withoutTrashed()
 */
	class Dimension extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $dimension_id
 * @property string $level
 * @property string $interpretation_text_ar
 * @property int|null $high_threshold
 * @property int|null $low_threshold
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Dimension|null $dimension
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereDimensionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereHighThreshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereInterpretationTextAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereLowThreshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionInterpretation withoutTrashed()
 */
	class DimensionInterpretation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $result_id
 * @property string $dimension_id
 * @property int $score
 * @property int $max_score
 * @property string|null $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Dimension|null $dimension
 * @property-read \App\Models\Result|null $result
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereDimensionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereMaxScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereResultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DimensionScore whereUpdatedAt($value)
 */
	class DimensionScore extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $user_id
 * @property string $assessment_id
 * @property string $status
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $coupon_id
 * @property int|null $discount_applied
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Assessment|null $assessment
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \App\Models\Result|null $result
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserAnswer> $userAnswers
 * @property-read int|null $user_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereAssessmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereDiscountApplied($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamSession withoutTrashed()
 */
	class ExamSession extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $title_ar
 * @property string|null $description_ar
 * @property string|null $category
 * @property int $total_questions
 * @property int|null $time_limit_min
 * @property bool $is_active
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GradedExamConstraintSetting|null $constraintSettings
 * @property-read \App\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamQuestion> $questions
 * @property-read int|null $questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamSession> $sessions
 * @property-read int|null $sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamUnit> $units
 * @property-read int|null $units_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereTimeLimitMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExam withoutTrashed()
 */
	class GradedExam extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $graded_exam_id
 * @property int $total_questions
 * @property numeric $easy_percentage
 * @property numeric $medium_percentage
 * @property numeric $hard_percentage
 * @property string $type_distribution_mode
 * @property string $mc_position_balance_mode
 * @property int $max_multi_correct_questions
 * @property int $max_consecutive_same_answer
 * @property int $max_consecutive_same_unit
 * @property array<array-key, mixed>|null $advanced_settings
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GradedExam|null $gradedExam
 * @property-read \App\Models\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereAdvancedSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereEasyPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereGradedExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereHardPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereMaxConsecutiveSameAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereMaxConsecutiveSameUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereMaxMultiCorrectQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereMcPositionBalanceMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereMediumPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereTypeDistributionMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamConstraintSetting whereUpdatedBy($value)
 */
	class GradedExamConstraintSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $question_id
 * @property string|null $option_label
 * @property string $option_text_ar
 * @property int $order_index
 * @property bool $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GradedExamQuestion|null $question
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamUserAnswerOption> $selectedByAnswers
 * @property-read int|null $selected_by_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereOptionLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereOptionTextAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamOption withoutTrashed()
 */
	class GradedExamOption extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $graded_exam_id
 * @property string $unit_id
 * @property int|null $original_number
 * @property string $level
 * @property string $question_type
 * @property string $text_ar
 * @property string|null $explanation_ar
 * @property bool $is_multi_correct
 * @property string|null $source_page_ref
 * @property int $order_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamOption> $correctOptions
 * @property-read int|null $correct_options_count
 * @property-read \App\Models\GradedExam|null $gradedExam
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamOption> $options
 * @property-read int|null $options_count
 * @property-read \App\Models\GradedExamUnit|null $unit
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamUserAnswer> $userAnswers
 * @property-read int|null $user_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion easy()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion hard()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion mcq()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion medium()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion trueFalse()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereExplanationAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereGradedExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereIsMultiCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereOriginalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereQuestionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereSourcePageRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereTextAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamQuestion withoutTrashed()
 */
	class GradedExamQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $session_id
 * @property int $correct_count
 * @property int $incorrect_count
 * @property int $total_questions
 * @property numeric $percentage
 * @property string|null $pass_status
 * @property \Illuminate\Support\Carbon $calculated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GradedExamSession|null $session
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereCalculatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereCorrectCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereIncorrectCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult wherePassStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamResult withoutTrashed()
 */
	class GradedExamResult extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $user_id
 * @property string $status
 * @property string $graded_exam_id
 * @property \App\Models\GradedExam $gradedExam
 * @property \Illuminate\Database\Eloquent\Collection $sessionQuestions
 * @method void load(array|string $relations)
 * @method bool update(array $attributes = [], array $options = [])
 * @property int $total_questions
 * @property array<array-key, mixed>|null $constraints_snapshot
 * @property int|null $random_seed
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GradedExamResult|null $result
 * @property-read int|null $session_questions_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamUserAnswer> $userAnswers
 * @property-read int|null $user_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereConstraintsSnapshot($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereGradedExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereRandomSeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSession withoutTrashed()
 */
	class GradedExamSession extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $session_id
 * @property string $question_id
 * @property int $position_in_exam
 * @property array<array-key, mixed>|null $shuffled_options_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GradedExamQuestion|null $question
 * @property-read \App\Models\GradedExamSession|null $session
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion wherePositionInExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereShuffledOptionsOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamSessionQuestion whereUpdatedAt($value)
 */
	class GradedExamSessionQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $graded_exam_id
 * @property int $unit_number
 * @property string $title_ar
 * @property int $order_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GradedExam|null $gradedExam
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamQuestion> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereGradedExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereUnitNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUnit withoutTrashed()
 */
	class GradedExamUnit extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $session_id
 * @property string $question_id
 * @property bool|null $is_correct
 * @property \Illuminate\Support\Carbon|null $answered_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GradedExamQuestion|null $question
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GradedExamUserAnswerOption> $selectedOptions
 * @property-read int|null $selected_options_count
 * @property-read \App\Models\GradedExamSession|null $session
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereAnsweredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswer whereUpdatedAt($value)
 */
	class GradedExamUserAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $user_answer_id
 * @property string $option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GradedExamOption|null $option
 * @property-read \App\Models\GradedExamUserAnswer|null $userAnswer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GradedExamUserAnswerOption whereUserAnswerId($value)
 */
	class GradedExamUserAnswerOption extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $name
 * @property string $category
 * @property string $icon_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereIconUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Icon whereUpdatedAt($value)
 */
	class Icon extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $assessment_id
 * @property string|null $dimension_id
 * @property string $text_ar
 * @property int $order_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $is_reversed
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AnswerOption> $answerOptions
 * @property-read int|null $answer_options_count
 * @property-read \App\Models\Assessment|null $assessment
 * @property-read \App\Models\Dimension|null $dimension
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserAnswer> $userAnswers
 * @property-read int|null $user_answers_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereAssessmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereDimensionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereIsReversed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereTextAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question withoutTrashed()
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $assessment_id
 * @property string $level
 * @property string $description_ar
 * @property array<array-key, mixed>|null $programs_ar
 * @property int|null $high_threshold
 * @property int|null $low_threshold
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $programs_intro_ar
 * @property string|null $programs_outro_ar
 * @property array<array-key, mixed>|null $certificates_ar
 * @property array<array-key, mixed>|null $plan_30_days_ar
 * @property string|null $certificates_intro_ar
 * @property string|null $plan_30_days_intro_ar
 * @property string|null $title_ar
 * @property array<array-key, mixed>|null $strengths_ar
 * @property array<array-key, mixed>|null $development_areas_ar
 * @property array<array-key, mixed>|null $how_to_learn_ar
 * @property array<array-key, mixed>|null $practical_tips_ar
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Assessment|null $assessment
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereAssessmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereCertificatesAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereCertificatesIntroAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereDevelopmentAreasAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereHighThreshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereHowToLearnAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereLowThreshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation wherePlan30DaysAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation wherePlan30DaysIntroAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation wherePracticalTipsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereProgramsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereProgramsIntroAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereProgramsOutroAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereStrengthsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Recommendation withoutTrashed()
 */
	class Recommendation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $session_id
 * @property int $total_score
 * @property int $max_possible_score
 * @property string|null $level
 * @property \Illuminate\Support\Carbon $calculated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DimensionScore> $dimensionScores
 * @property-read int|null $dimension_scores_count
 * @property-read \App\Models\ExamSession|null $examSession
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereCalculatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereMaxPossibleScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereTotalScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Result withoutTrashed()
 */
	class Result extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $national_id
 * @property string|null $phone
 * @property string|null $gender
 * @property string|null $qualification
 * @property string|null $nationality
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Coupon> $coupons
 * @property-read int|null $coupons_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Assessment> $createdAssessments
 * @property-read int|null $created_assessments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamSession> $examSessions
 * @property-read int|null $exam_sessions_count
 * @property-read string $display_email
 * @property-read string|null $display_national_id
 * @property-read string|null $display_phone
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Coupon> $permittedCoupons
 * @property-read int|null $permitted_coupons_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereQualification($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $id
 * @property string $session_id
 * @property string $question_id
 * @property string $selected_option_id
 * @property int $score_earned
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExamSession|null $examSession
 * @property-read \App\Models\Question|null $question
 * @property-read \App\Models\AnswerOption|null $selectedOption
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereScoreEarned($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereSelectedOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAnswer whereUpdatedAt($value)
 */
	class UserAnswer extends \Eloquent {}
}

