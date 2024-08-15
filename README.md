Webform CiviCRM Ticket Tracking Handler

The Webform CiviCRM Ticket Tracking module is a customization for Drupal. When enabled, a webform will be automatically closed when all tickets have been sold.  If a registration is canceled and tickets become available, it will also be automatically reopened.

 
### Set up

* Go to the **Settings** tab of an existing Webform
* Click on the **Emails/Handlers** sub-tab.
* Click **Add handler** and search for, then select 'AGBU Webform Ticket Tracking'
* Click **Save** on the handler’s setting page
* Click **Save** handler on the Emails/Handlers page.
* In CiviCRM, under **Events » Manage Events**, select **Configure** next to the event(s) in question and set a value for Max Number of Participants.

Note that you must also have the CiviCRM Handler included on this Webform, which is added automatically if you select **Enable CiviCRM Processing** on the CiviCRM tab of the Webform.

 
### Notes on ticket sales counts

By default, every ticket sales counts as one person for purposes of maximum participants.  However, sometimes a ticket sale should count as multiple people (e.g. purchasing a table for 10).

If you would like a ticket sale to count as multiple participants:

* On the CiviCRM tab of the Webform, click on **Event Registration** within the left toolbar
* In Event Sets, enable the Participant Count field.
* Using either a default value, an open field, or Computed Twig, set the number of participants that ticket should count as.

Note: On the Webform's CiviCRM Event tab, the Registration Method can be set to **Register each participant separately** or **Register all contacts for the same event(s)**.  When registering separately, each registrant's ticket can count as a different number of participants.  When registering for the same event(s), the number of participants is the same for each registrant.
