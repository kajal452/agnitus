Individual Developer (Standalone)
A standalone individual developer does not exchange patches with other people, and works alone in a single repository, using the following commands.

git-init[1] to create a new repository.

git-log[1] to see what happened.

git-switch[1] and git-branch[1] to switch branches.

git-add[1] to manage the index file.

git-diff[1] and git-status[1] to see what you are in the middle of doing.

git-commit[1] to advance the current branch.

git-restore[1] to undo changes.

git-merge[1] to merge between local branches.

git-rebase[1] to maintain topic branches.

git-tag[1] to mark a known point.

###########################################################################################################################

Individual Developer (Participant)
A developer working as a participant in a group project needs to learn how to communicate with others, and uses these commands in addition to the ones needed by a standalone developer.

git-clone[1] from the upstream to prime your local repository.

git-pull[1] and git-fetch[1] from "origin" to keep up-to-date with the upstream.

git-push[1] to shared repository, if you adopt CVS style shared repository workflow.

git-format-patch[1] to prepare e-mail submission, if you adopt Linux kernel-style public forum workflow.

git-send-email[1] to send your e-mail submission without corruption by your MUA.

git-request-pull[1] to create a summary of changes for your upstream to pull.

###########################################################################################################################

Integrator
A fairly central person acting as the integrator in a group project receives changes made by others, reviews and integrates them and publishes the result for others to use, using these commands in addition to the ones needed by participants.

This section can also be used by those who respond to git request-pull or pull-request on GitHub (www.github.com) to integrate the work of others into their history. A sub-area lieutenant for a repository will act both as a participant and as an integrator.

git-am[1] to apply patches e-mailed in from your contributors.

git-pull[1] to merge from your trusted lieutenants.

git-format-patch[1] to prepare and send suggested alternative to contributors.

git-revert[1] to undo botched commits.

git-push[1] to publish the bleeding edge

###########################################################################################################################

Repository Administration
A repository administrator uses the following tools to set up and maintain access to the repository by developers.

git-daemon[1] to allow anonymous download from repository.

git-shell[1] can be used as a restricted login shell for shared central repository users.

git-http-backend[1] provides a server side implementation of Git-over-HTTP ("Smart http") allowing both fetch and push services.

gitweb[1] provides a web front-end to Git repositories, which can be set-up using the git-instaweb[1] script.
