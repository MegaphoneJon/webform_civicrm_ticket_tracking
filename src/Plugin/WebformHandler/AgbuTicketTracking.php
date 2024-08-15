<?php

namespace Drupal\agbu_webform_ticket_tracking\Plugin\WebformHandler;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Webform ticket tracking handler.
 *
 * @WebformHandler(
 *   id = "agbu_ticket_tracking",
 *   label = @Translation("AGBU Ticket Tracking"),
 *   category = @Translation("Form Handler"),
 *   description = @Translation("Count total tickets sold in Webform for an event."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 * )
 */
class AgbuTicketTracking extends WebformHandlerBase {

  use StringTranslationTrait;

  private array $civiHandlerData;

  public function prepareForm(WebformSubmissionInterface $webform_submission, $operation, FormStateInterface $form_state) {
    // // This part will help you get the event ID.
    // $webform = $webform_submission->getWebform();
    // $civiHandler = $webform->getHandler('webform_civicrm');
    // $civiHandlerSettings = $civiHandler->getConfiguration()['settings'];
    // $this->civiHandlerData = $civiHandlerSettings['data'];
    // // Pulls the event id and event type id as a hyphenated string from $civiHandlerSettings
    // $eventIdAndType = current($civiHandlerSettings['civicrm_1_participant_1_participant_event_id']);
    // // Convert $eventIdAndType to just the event id as an integer
    // $eventId = (int) strtok($eventIdAndType, '-');
    // // This part is for looking up information about the event.
    // $utils = new \Drupal\webform_civicrm\Utils;
    // $eventApiParams = [
    //   'is_template' => 0,
    //   'is_active' => 1,
    //   'id' => $eventId,
    //   'return' => ['max_participants', 'is_full'],
    // ];
    // $eventInfo = $utils->wf_crm_apivalues('Event', 'get', $eventApiParams);
    // // Get the max number of participants for the event.
    // $maxParticipants = $eventInfo[$eventId]['max_participants'];
    // // Get the number of available seats left for the event.
    // $availableSeats = $eventInfo[$eventId]['available_places'];
    // // If the event is full, close the form.
    // if ($eventInfo[$eventId]["is_full"]) {
    //   $webform->setPropertyOverride('status', FALSE);
    //   //$webform->setStatus('closed');
    //   $message = 'The form has ' . $availableSeats . ' available seats, the max seats is currently set to ' . $maxParticipants . ' the form will now be closed.';
    // }
    // else {
    //   $webform->setPropertyOverride('status', TRUE);
    //   $message = 'The form has ' . $availableSeats . ' available seats, the max seats is currently set to ' . $maxParticipants . ', the form will stay open/be reopened.';
    // }
    // // $webform->save();

    // // log the output to the drupal logger, to indicate if the webform is still open or closed after each submission.
    // \Drupal::logger('agbu_ticket_tracking')->info($message);
  }

}
