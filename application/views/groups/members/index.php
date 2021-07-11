<script>
    const group_id = '<?php echo $group_id; ?>'
    const statics = '<?php echo json_encode($for_the_statics); ?>';
</script>

<div class="member-general-actions">
    <span class="user-group-action all" onclick="members_page()">Active</span>
    <span class="user-group-action new" action="new">New</span>
    <span class="user-group-action staff" action="staff">Staff</span>
    <span class="user-group-action old" action="old">Deregistered</span>
    <span class="user-group-action invites" onclick="invites_page()">Invite</span>
    <span class="user-group-action export" action="export">Export</span>
</div>

<div class="members-page">

</div>